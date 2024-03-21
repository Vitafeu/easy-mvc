<?php

namespace Vitafeu\EasyMVC;

class Model {
    private static $conn = null;

    private static function init() {
        if (self::$conn === null) {
            self::$conn = Database::getConnection();
        }
    }

    public static function all() {
        $class = strtolower(basename(str_replace('\\', '/', get_called_class())));

        self::init();
        $stmt = self::$conn->prepare("SELECT * FROM {$class}");
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}