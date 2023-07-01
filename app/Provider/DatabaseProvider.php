<?php

namespace App\Provider;

class DatabaseProvider{
    protected static $db;
    public function __construct(){
        // self::$db= "tets";
        try{
            $host = DB_HOST;
            $user = DB_USER;
            $pass = DB_PASS;
            $dbname = DB_NAME;
           self::$db = new \PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
           self::$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }catch(\PDOException $e){
            echo $e->getMessage();
            die();
        }
    }
    public static function getDB() {
        return self::$db;
    }
}
