<?php

class Connection{
    
    public function connect(){ 
        
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];   

        try {
            $conn = new PDO("mysql:host=localhost;dbname=wierd","root" , "",$options);
            // set the PDO error mode to exception
            // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully"; 
            return $conn;
        }
        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }
    
}