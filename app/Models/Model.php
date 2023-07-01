<?php

namespace App\Models;
use App\Provider\DatabaseProvider;
use PDO;

class Model extends DatabaseProvider{
    protected static $table;
    protected static $conditions = [];

        /**
     * different condition data
     */

     public function where($column, $operator, $value) {
        $this->conditions[] = "$column $operator :$column";
        return $this;
    }
    public function orderBy($column, $direction = 'ASC') {
        $this->orderBy = "ORDER BY $column $direction";
        return $this;
    }

    public static function create(array $data){
        $databaseProvider = new DatabaseProvider();
        $db = $databaseProvider->getDB();
        $table =static::$table;

        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
        $columns = implode(', ', array_keys($data));
        $placeholders = ':' . implode(', :', array_keys($data));
        $sql = "INSERT INTO {$table} ($columns) VALUES ($placeholders)";
        $stmt = $db->prepare($sql);
        $stmt->execute($data);
        return $db->lastInsertId();
    }

    public static function update($id, array $data){
        $databaseProvider = new DatabaseProvider();
        $db = $databaseProvider->getDB();
        $table =static::$table;

        $data['updated_at'] = date('Y-m-d H:i:s');
        $setColumns = [];
        foreach($data as $column => $value){
           $setColumns[] = "$column = :$column"; 
        }
        $setColumns = implode(', ', $setColumns);
        $sql = "UPDATE {$table} SET $setColumns WHERE id = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute($data);
        return $stmt->rowCount();
    }

    public static function delete($id){
        $databaseProvider = new DatabaseProvider();
        $db = $databaseProvider->getDB();
        $table =static::$table;

        $sql = "DELETE FROM {$table} WHERE id = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public static function first($id){
        $databaseProvider = new DatabaseProvider();
        $db = $databaseProvider->getDB();
        $table =static::$table;

        $sql = "SELECT * FROM {$table} WHERE id = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function get(){
        $databaseProvider = new DatabaseProvider();
        $db = $databaseProvider->getDB();
        $table =static::$table;
        // print_r($db);
        // die();
        $sql = "SELECT * FROM $table";
        if (!empty(self::$conditions)) {
            print_r('true');
            die();
            $sql .= " WHERE " . implode(' AND ', self::$conditions);
        }
        $sql .= " self::orderBy()";

        
        // $db = parent::$db;
        $sql = "SELECT * FROM {$table}";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }


    /**
     * model class function
     */

     public function belongsTo($relatedModel, $foreignKey) {
        $relatedTable = (new $relatedModel($this->db))->getTable();
        $relatedKey = 'id';
        return (new QueryBuilder($this->db, $relatedTable))->where($relatedKey, '=', $this->$foreignKey)->get();
    }

    public function hasMany($relatedModel, $foreignKey) {
        $relatedTable = (new $relatedModel($this->db))->getTable();
        $localKey = 'id';
        return (new QueryBuilder($this->db, $relatedTable))->where($foreignKey, '=', $this->$localKey)->get();
    }

}

