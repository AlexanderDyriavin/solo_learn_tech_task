<?php


namespace Tech\Core;

use PDO;
use Tech\Core\ErrorHandler;

class Database
{
    protected static $instance = null;

    public function __construct()
    {
    }

    public function __clone()
    {
    }

    public static function instance()
    {
        if (self::$instance === null) {
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                PDO::ATTR_EMULATE_PREPARES => true,
            ];
            $dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8mb4', APP_CONFIG['database']['host'], APP_CONFIG['database']['db']);
            self::$instance = new PDO($dsn, APP_CONFIG['database']['user'], APP_CONFIG['database']['pass'], $options);
        }
        return self::$instance;
    }

    public static function __callStatic($method, $args)
    {
        return call_user_func_array([self::instance(), $method], $args);
    }

    public static function run($sql, $args = [])
    {
        if (!$args) {
            return self::instance()->query($sql);
        }

        $stmt = self::instance()->prepare($sql);
        try {
            $stmt->execute($args);
        } catch (\Exception $e) {
            View::render('error',
                ['error_code' => $e->getCode(),
                    'message' => $e->getMessage()
                ]);
        }
        return $stmt;
    }
}