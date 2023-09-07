<?php

class Database{
    protected static $instance=NULL;
    public function __construct(){
        echo "connect<br>";
    }
    public static function connect(){
        if (isset(Database::$instance)==null) {
            self::$instance = new Database();
        }
        return Database::$instance;
    }
}

Database::connect();
Database::connect();
Database::connect();
Database::connect();