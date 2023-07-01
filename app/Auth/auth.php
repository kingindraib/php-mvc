<?php
namespace App\Auth;
use App\Provider\DatabaseProvider;
use App\Auth\HasAuthentiacible;
use PDO;
session_start();
trait Authenticible{
    // protected static $table;
    public static function login(array $creadintial) {
        // Login logic
       
        if (self::validateCredentials($creadintial)) {
            // return session_id();
            $message = [
                'success' => true,
                'status' => 'success',
                'message' => 'Login successful',
                'data' => $_SESSION['session_data'],
            ];
            return true;
        } else {
            $message = [
                'success' => false,
                'status' => 'error',
                'message' => 'Invalid credentials',
                'data' => '',
            ];
            // return "Invalid credentials\n";
            return $message;
        }
    }

    private static function validateCredentials($creadintial) {
        // print_r($creadintial);
        
        $databaseProvider = new DatabaseProvider();
        $db = $databaseProvider->getDB();
       
        $table =static::$table;
        // print_r($table);
        
        // $placeholders = ':' . implode(', :', array_keys($creadintial));
        // $sql = "SELECT * FROM {$table} WHERE username = :username AND password = :password";
        $placeholders = ':' . implode(', :', array_keys($creadintial));
        // print_r($placeholders);
        // die();

        $sql = "SELECT * FROM {$table} WHERE " . implode(' AND ', array_map(function($key) {
            return "{$key} = :{$key}";
        }, array_keys($creadintial)));
        
        $stmt = $db->prepare($sql);
        // $stmt->bindParam(':username', $username);
        // $stmt->bindParam(':password', $password);
        // $stmt->execute();
        $stmt->execute($creadintial);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $_SESSION['session_data']= $result;
    }

    public static function Auth($args){
        if (isset($_SESSION['session_data'])) {
            return $_SESSION['session_data'][$args];
        } else {
            return false;
        }
    }

    // logout
    public static function logout() {
        session_destroy();
        unset($_SESSION["session_data"]);
        return true;
    }
}