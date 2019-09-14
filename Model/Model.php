<?php

class Model{
    /**
     * 
     * Initialize the variables
     * 
     */
    protected $table;
    protected $fillables;
    protected $preparedFillables;

    /**
     * 
     * prepare youur $fillables for PDO::PREPARE
     * 
     */
    public function __construct(){
        foreach($this->fillables as $item){
            $this->preparedFillables[] = ":".$item;
        }
    }

    /**
     * 
     * This Will fetch all records from the table
     * 
     */
    public function all(){
        $statement = 'SELECT * FROM '.$this->table;
        $all = Connection::connect()->query($statement);
        return $all;
    }

    /**
     * 
     * This will fetch a records with the id = $id
     * 
     */
    public function find($id){
        $statement = 'SELECT * FROM '.$this->table.' where id='.$id;
        $find = Connection::connect()->query($statement)->fetch();
        return $find;
    }

    /**
     * 
     * This will insert a new recrod to the table.
     * 
     */
    public function insert($data){
        $statement = 'INSERT INTO '.$this->table.' ('.implode(',',$this->fillables).') VALUES ('.implode(',',$this->preparedFillables).')';
        if (Connection::connect()->prepare($statement)->execute($data)) {
            return true;
        }else{
            return false;
        }
    }

    /**
     * 
     * Incomplete filter
     * 
     */
    public function filter($filter){
        $statement = 'SELECT * FROM '.$this->table.' where kelulusan='.$filter.' ORDER BY id';
        $all = Connection::connect()->query($statement);
        return $all;
    }
}