<?php

namespace Vitafeu\EasyMVC;

use PDO;
use ReflectionClass;

class Database {

    public static function getConnection() {
        try {
            $pdo = new PDO(
                $_ENV['DB_CONN'] . ":host=" . $_ENV['DB_HOST'] . ";dbname=" . $_ENV['DB_NAME'] . ";charset=utf8mb4",
                $_ENV['DB_USER'],
                $_ENV['DB_PASSWORD']
            );

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;
        } catch (\Exception $e) {
            throw new \Exception("Database connection failed : " . $e->getMessage());
        }
    }

    // TODO : Add method to get tables and then use it in createTables and dropTables

    public static function createTables() {
        try {     
            $modelsDirectory = __DIR__ . "/../app/Models";

            foreach (glob($modelsDirectory . "/*.php") as $modelFile) {
                $className = basename($modelFile, ".php");
                $classNamespace = "App\\Models\\" . $className;

                // Verifications to avoid errors
                if (!class_exists($classNamespace)) {
                    continue;
                }

                $reflectionClass = new ReflectionClass($classNamespace);

                if (!$reflectionClass->isSubclassOf(Model::class)) {
                    continue;
                }

                $table = $reflectionClass->getStaticPropertyValue('table');
                $attributes = $reflectionClass->getStaticPropertyValue('attributes');

                if (!is_string($table) || empty($attributes) || !is_array($attributes)) {
                    continue;
                }

                // Build SQL query
                $sql = "CREATE TABLE IF NOT EXISTS $table (\n";
                foreach ($attributes as $attributeName => $attributeDefinition) {
                    $sql .= "$attributeName $attributeDefinition,\n";
                }
                $sql = rtrim($sql, ",\n") . "\n);";

                // Execute SQL query
                $pdo = self::getConnection();
                $pdo->exec($sql);
            }
        } catch (\Exception $e) {
            throw new \Exception("Database tables creation failed : " . $e->getMessage());
        }
    }

    public static function dropTables() {
        try {
            $modelsDirectory = __DIR__ . "/../app/Models";

            foreach (glob($modelsDirectory . "/*.php") as $modelFile) {
                $className = basename($modelFile, ".php");
                $classNamespace = "App\\Models\\" . $className;

                // Verifications to avoid errors
                if (!class_exists($classNamespace)) {
                    continue;
                }

                $reflectionClass = new ReflectionClass($classNamespace);

                if (!$reflectionClass->isSubclassOf(Model::class)) {
                    continue;
                }

                $table = $reflectionClass->getStaticPropertyValue('table');

                if (!is_string($table)) {
                    continue;
                }

                // Build SQL query
                $sql = "DROP TABLE IF EXISTS $table;";

                // Execute SQL query
                $pdo = self::getConnection();
                $pdo->exec($sql);
            }
        } catch (\Exception $e) {
            throw new \Exception("Database tables deletion failed : " . $e->getMessage());
        }
    }
}