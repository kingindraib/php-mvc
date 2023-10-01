<?php

namespace App\Provider;
use PDO;

class DatabaseProvider{
    protected static $db;
    public function __construct(){
        // self::$db= "tets";
        try{
            $host = DB_HOST;
            $user = DB_USER;
            $pass = DB_PASS;
            $dbname = DB_NAME;
           self::$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
           self::$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }catch(\PDOException $e){
            echo $e->getMessage();
            die();
        }
    }
    public static function getDB() {
        return self::$db;
    }

    // public static function closeDB() {
    //     self::$db = null;
    //     return self::$db;

    // }

    public static function DBRaw($query,$param = '') {
        $db = self::$db;
        $stmt = $db->prepare($query);
        if($param != ''){
            $stmt->execute($param);
        }else{
            $stmt->execute();
        }
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
