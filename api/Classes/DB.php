<?php

namespace App\Classes;

use PDO;
use PDOException;

class DB{

    private static  ?PDO $dbInstance = null;

    /**
     * DbStatic constructor.
     */
    public function __construct(){
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . "/conf.local.php")){
            require_once $_SERVER['DOCUMENT_ROOT'] . "/conf.local.php";
        }
        else {
            require_once $_SERVER['DOCUMENT_ROOT'] . "/conf.php";
        }

        /**
         * @var String $host
         * @var String $db
         * @var String $user
         * @var String $pass
         */
        try {
            self::$dbInstance = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
            self::$dbInstance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$dbInstance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            self::$dbInstance->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        }
    }

    /**
     * Return PDO instance.
     */
    public static function getInstance(): ?PDO
    {
        if (is_null(self::$dbInstance)) {
            new self();
        }
        return self::$dbInstance;
    }

    /**
     * Avoid instance to be cloned.
     */
    public function __clone() { }

    /**
     * Return sanitized string to have secure data to insert into the database.
     * @param $data
     * @return string
     */
    public static function sanitizeString($data): string {
        $data = strip_tags($data);
        $data = addslashes($data);
        return trim($data);
    }

    /**
     * Return sanitized int to have secure data to insert into the database.
     * @param $data
     * @return int
     */
    public static function sanitizeInt($data): int {
        return intval($data);
    }



}