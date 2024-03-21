<?php

namespace Vitafeu\EasyMVC;

use PDO;

class Database {

    public static function getConnection() {
        try {
            $pdo = new PDO(
                $_ENV['DB_CONN'] . ":host=" . $_ENV['DB_HOST'] . ";dbname=" . $_ENV['DB_DATABASE'] . ";charset=utf8mb4",
                $_ENV['DB_USER'],
                $_ENV['DB_PASSWORD']
            );

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;
        } catch (\Exception $e) {
            throw new \Exception("Database connection failed : " . $e->getMessage());
        }
    }
}