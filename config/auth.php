<?php
namespace App;
class Auth{
    public static function login($username, $password) {
        $sql = "SELECT * FROM {$this->table} WHERE username = :username AND password = :password";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}