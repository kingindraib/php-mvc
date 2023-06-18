<?php

namespace App\Provider;

class DatabaseProvider{
    private $db;
    public function __construct(){
        // connect using try and cache
        try{
            $host = DB_HOST;
            $user = DB_USER;
            $pass = DB_PASS;
            $dbname = DB_NAME;
            $this->db = new \PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
            $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }catch(\PDOException $e){
            echo $e->getMessage();
            die();
        }
    }
}
