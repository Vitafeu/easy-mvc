<?php

namespace Vitafeu\EasyMVC;

use PDO;

class Model {
    private static $conn = null;

    private static function init() {
        if (self::$conn === null) {
            self::$conn = Database::getConnection();
        }
    }

    public static function read() {
        $calledClass = get_called_class();

        self::init();

        $columns = implode(',', array_keys($calledClass::$attributes));

        $stmt = self::$conn->prepare("SELECT $columns FROM {$calledClass::$table}");
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
}