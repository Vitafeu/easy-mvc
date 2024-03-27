<?php

namespace Vitafeu\EasyMVC;

use PDO;

class Model {
    private static $conn = null;

    private static $query = '';

    private static function init() {
        if (self::$conn === null) {
            self::$conn = Database::getConnection();
        }
    }

    public static function where($condition) {
        $calledClass = get_called_class();

        self::$query = "SELECT * FROM {$calledClass::$table}";

        if (!empty($condition)) {
            self::$query .= " WHERE $condition";
        }

        return new static();
    }

    public static function read() {
        if (empty(self::$query)) {
            $calledClass = get_called_class();

            $columns = implode(',', array_keys($calledClass::$attributes));

            self::$query = "SELECT $columns FROM {$calledClass::$table}";
        }

        self::init();
        $stmt = self::$conn->prepare(self::$query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public static function create($data) {
        $calledClass = get_called_class();

        self::init();

        $columns = implode(',', array_keys($data));
        $placeholders = implode(',', array_fill(0, count($data), '?'));

        $sql = "INSERT INTO {$calledClass::$table} ($columns) VALUES ($placeholders)";
        $stmt = self::$conn->prepare($sql);

        $stmt->execute(array_values($data));

        return self::$conn->lastInsertId();
    }

    public static function update($id, $data) {
        $calledClass = get_called_class();

        self::init();

        $columns = implode(',', array_map(function ($key) {
            return "{$key} = ?";
        }, array_keys($data)));

        $sql = "UPDATE {$calledClass::$table} SET $columns WHERE id = ?";
        $stmt = self::$conn->prepare($sql);
        $stmt->execute(array_merge(array_values($data), [$id]));

        return $stmt->rowCount();
    }

    public static function delete($id) {
        $calledClass = get_called_class();

        self::init();

        $sql = "DELETE FROM {$calledClass::$table} WHERE id = ?";
        $stmt = self::$conn->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->rowCount();
    }
}