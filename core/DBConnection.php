<?php

namespace app\core;

use PDO;

/**
 * Singleton Pattern
 */
class DBConnection
{
    private  $serverName;
    private  $username;
    private  $password;
    private  $dbName;
    private  $charset;
    private static $pdo;

    private function __construct(){
        $this->serverName = "localhost";
        $this->username = "root";
        $this->password = "admin";
        $this->dbName = "test";
        $this->charset = "utf8mb4";

        $this->connect();
    }

    private function connect(){

    try {
        $dataSourceName = "mysql:host=" . $this->serverName . ";dbname=" . $this->dbName . ";charset=" . $this->charset;
        self::$pdo = new PDO($dataSourceName, $this->username, $this->password);
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
        catch (PDOException $e){
            var_dump("Connection failed: ".$e->getMessage());
        }
    }

    public static function getPDO(){
        if(self::$pdo == null){
           new DBConnection();
        }
        return self::$pdo;
    }
}

?>


