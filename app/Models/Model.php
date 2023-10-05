<?php

namespace App\Models;
use App\Provider\DatabaseProvider;
use PDO;

class Model extends DatabaseProvider{
    protected static $table;
    protected static $conditions = [];
    protected static $bindings=[];
    protected static $requestTable = '';
    protected static $requestColumns = [];
    protected static $orderBy = [];
    protected static $groupBy;
    protected static $selectColumns;

        /**
     * different condition data
     */

     public static function where($column, $operator, $value) {
 
        $table =static::$table;
        static::$requestColumns[] = $column;
        static::$requestTable = $table;
        static::$conditions[] = "$column $operator :$column";
        static::$bindings[":$column"] = $value;
        return new static();
    }
    public static function orderBy($column, $direction = 'ASC') {
        $table =static::$table;

        static::$orderBy[] = "ORDER BY $column $direction";
        static::$requestTable = $table;
        return new static();
        // return static::$orderBy;
    }

    public static function groupBy($key,$column){
        $table = static::$table;
        // SELECT row_id FROM seats GROUP BY row_id;
        // static::$groupBy = "SELECT $column FROM $table GROUP BY $key";
        // dd(static::$conditions);
            // $query = "SELECT $column FROM $table GROUP BY $key";
            $query = array('key'=>$key,'column'=>$column);
         static::$groupBy = $query;
        // static::$selectColumns = implode(', ', $column);
         // SELECT row_id FROM seats GROUP BY row_id;
        // static::$selectColumns = $column;
        // dd(static::$selectColumns);
        return new static();

    }


    public static function create(array $data){
        $databaseProvider = new DatabaseProvider();
        $db = $databaseProvider->getDB();
        $table =static::$table;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
        
        $columns = implode(', ', array_keys($data));
        $placeholders = ':' . implode(', :', array_keys($data));
        
        $field = static::$fillable;
        $field[] = 'created_at';
        $field[] = 'updated_at';
        $field = array_flip($field);
       
        $placeholder = array_intersect_key($data,$field);
        $placeholderdata = ':'.implode(', :', array_keys($placeholder));
 
        $fields = implode(', ', array_keys($placeholder));
        // $sql = "INSERT INTO {$table} ($columns) VALUES ($placeholders)";
        $sql = "INSERT INTO {$table} ($fields) VALUES ($placeholderdata)";
       
        $stmt = $db->prepare($sql);
        $stmt->execute($placeholder);
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
        // echo "<pre>";
        // print_r($data);
        // print_r($setColumns);
        // // die();
        // // print_r($stmt);
        // die();
        $field = static::$fillable;
        $field[] = 'updated_at';
        $field = array_flip($field);
        $placeholder = array_intersect_key($data,$field);
         
        $fillableColumns = [];
        foreach($placeholder as $items=>$value){
            $fillableColumns[] = "$items= :$items";
        }
        $placeholderdata = implode(', ', $fillableColumns);
        $update = $placeholder;
        $update['id'] = $id;
        // $placeholderdata = ':'.implode(', :', array_keys($placeholder));

        $sql = "UPDATE {$table} SET $placeholderdata WHERE id = :id";
        $stmt = $db->prepare($sql);
        // print_r($update);
        // die();
        $stmt->bindParam(':id', $id);
        $stmt->execute($update);
        return $stmt->rowCount();
    }

    public static function delete($id=''){
        $databaseProvider = new DatabaseProvider();
        $db = $databaseProvider->getDB();
        $table =static::$table;
        if (!empty(static::$conditions) && static::$requestTable == $table) {
            $field = static::$fillable;
            $reqcondition = static::$conditions;
            $columns = array_map(function ($item) {
                return strtok($item, ' =');
            }, $reqcondition);
            $conditions = array_intersect($field,$columns);
            $acceptcondition = array_map(function ($column) {
                return "$column = :$column";
            }, $conditions);


            $sql = "DELETE FROM {$table}";
            $sql .= " WHERE " . implode(' AND ', $acceptcondition);
        }else{
            $sql = "DELETE FROM {$table} WHERE id = :id";
           
        }
        
        // $sqlcount = "SELECT COUNT(*) as count FROM {$table} WHERE id = :id ";
        $sqlcount = "SELECT COUNT(*) as count FROM {$table} ";
        $countstmt = $db->prepare($sqlcount);
        // $countstmt->bindParam(':id', $id);
        $countstmt->execute();
        $result = (object) $countstmt->fetch(PDO::FETCH_ASSOC);
        // dd($result->count);
       
        if($result->count>0) {
            // dd("true");
            // dd($sql);
            $stmt = $db->prepare($sql);
            if(!empty(static::$conditions) && static::$requestTable == $table){
                $field = static::$fillable;
                $reqcondition = static::$conditions;
                $columns = array_map(function ($item) {
                    return strtok($item, ' =');
                }, $reqcondition);
                $conditions = array_intersect($field,$columns);
                $bindingarray = array_combine(
                    array_map(function ($column) {
                        return ":$column";
                    }, $conditions),
                    array_keys($conditions)
                );
                $reqbinding = static::$bindings;
                $matchingArray = [];
                foreach ($bindingarray as $key => $value) {
                    if (array_key_exists($key, $reqbinding)) {
                        $matchingArray[$key] = $reqbinding[$key];
                    }
                }
                $stmt->execute($matchingArray);
                return $stmt->rowCount();
            }else{
                
                $stmt->bindParam(':id', $id);
                $stmt->execute();
                return $stmt->rowCount();
            }

        }else{
            // dd("database is empty");
            return true;
        }
       
    }

    public static function find($id){
        $databaseProvider = new DatabaseProvider();
        $db = $databaseProvider->getDB();
        $table =static::$table;

        $sql = "SELECT * FROM {$table} WHERE id = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
        
    }

    public static function findorFail($id){
        $databaseProvider = new DatabaseProvider();
        $db = $databaseProvider->getDB();
        $table =static::$table;

        $sql = "SELECT * FROM {$table} WHERE id = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return (object) $stmt->fetch(PDO::FETCH_ASSOC);
        
    }

    public static function first(){
        $databaseProvider = new DatabaseProvider();
        $db = $databaseProvider->getDB();
        $table = static::$table;
        $sql = "SELECT * FROM {$table}";
        if (!empty(static::$conditions) && static::$requestTable == $table) {
            $field = static::$fillable;
            $reqcondition = static::$conditions;
            $columns = array_map(function ($item) {
                return strtok($item, ' =');
            }, $reqcondition);
            $conditions = array_intersect($field,$columns);
            $acceptcondition = array_map(function ($column) {
                return "$column = :$column";
            }, $conditions);
            $sql .= " WHERE " . implode(' AND ', $acceptcondition)." LIMIT 1";
        }else{
            $sql .= " LIMIT 1";
        }
        $stmt = $db->prepare($sql);
        if(!empty(static::$conditions) && static::$requestTable == $table){
            $field = static::$fillable;
            $reqcondition = static::$conditions;
            $columns = array_map(function ($item) {
                return strtok($item, ' =');
            }, $reqcondition);
            $conditions = array_intersect($field,$columns);
            $bindingarray = array_combine(
                array_map(function ($column) {
                    return ":$column";
                }, $conditions),
                array_keys($conditions)
            );
            $reqbinding = static::$bindings;
            $matchingArray = [];
            foreach ($bindingarray as $key => $value) {
                if (array_key_exists($key, $reqbinding)) {
                    $matchingArray[$key] = $reqbinding[$key];
                }
            }
            $stmt->execute($matchingArray);
        }else{
            $stmt->execute();
        }
        // $stmt->execute();
        $obj = $stmt->fetch(PDO::FETCH_ASSOC);
        return (object)$obj;
    }


    public static function get(){
        $databaseProvider = new DatabaseProvider();
        $db = $databaseProvider->getDB();
        $table =static::$table;   
        $groupBy = static::$selectColumns;
        $sql = "SELECT * FROM {$table}";
        // if(isset(static::$groupBy)){
        if(!empty(static::$groupBy)){
        //    $sql = static::$groupBy;
        $column = static::$groupBy['column'];
        $key = static::$groupBy['key'];
        $sql = "SELECT {$column} FROM $table GROUP BY {$key}";
        }
    //    dd(static::$groupBy);
    //    "SELECT $column FROM $table GROUP BY $key";
        // dd($sql);
        // print_r(static::$groupBy);
          // SELECT row_id FROM seats GROUP BY row_id;
        //   print_r(static::$selectColumns);
        // dd($table);
        // print_r(static::$requestTable);
        //   die();
        // dd(true);
       
        // dd(static::$fillable);

        if (!empty(static::$conditions) && static::$requestTable == $table) {
            // dd(true);
            $field = static::$fillable;
            $reqcondition = static::$conditions;
            $columns = array_map(function ($item) {
                return strtok($item, ' =');
            }, $reqcondition);
            $conditions = array_intersect($field,$columns);
            $acceptcondition = array_map(function ($column) {
                return "$column = :$column";
            }, $conditions);
            $sql .= " WHERE " . implode(' AND ', $acceptcondition);

            if(!empty(static::$groupBy)){
                $column = static::$groupBy['column'];
                $key = static::$groupBy['key'];
                // $sql = "SELECT {$column} FROM $table " WHERE " . implode(' AND ', $acceptcondition) GROUP BY {$key}";
                $sql = "SELECT {$column} FROM {$table} WHERE " . implode(' AND ', $acceptcondition) . " GROUP BY {$key}";
            }
        }
        if(!empty(static::$orderBy) && static::$requestTable == $table){
            $sql .=  ' '.implode( static::$orderBy);
        }
        // dd($sql);
       
        $stmt = $db->prepare($sql);
        // dd($stmt);
        if(!empty(static::$conditions) && static::$requestTable == $table){
            $field = static::$fillable;
            $reqcondition = static::$conditions;
            // dd($reqcondition);
            $columns = array_map(function ($item) {
                return strtok($item, ' =');
            }, $reqcondition);
            $conditions = array_intersect($field,$columns);
            $bindingarray = array_combine(
                array_map(function ($column) {
                    return ":$column";
                }, $conditions),
                array_keys($conditions)
            );
            $reqbinding = static::$bindings;
          
            $matchingArray = [];
            // dd($reqbinding);
            foreach ($bindingarray as $key => $value) {
                if (array_key_exists($key, $reqbinding)) {
                    $matchingArray[$key] = $reqbinding[$key];
                }
            }
            // dd($matchingArray);
            $stmt->execute($matchingArray);
        }else{
            $stmt->execute();
        }
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public static function count(){
        $databaseProvider = new DatabaseProvider();
        $db = $databaseProvider->getDB();
        $table =static::$table;
        $sql = "SELECT COUNT(*) as count FROM {$table}";
    }

    public static function all(){
        $databaseProvider = new DatabaseProvider();
        $db = $databaseProvider->getDB();
        $table =static::$table;   
        // $groupBy = static::$selectColumns;
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

