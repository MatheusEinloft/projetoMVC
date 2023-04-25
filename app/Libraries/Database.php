<?php

class Database {

    private $host = '172.17.0.3';
    private $db = 'projetomvc';
    private $user = 'root';
    private $password = 'root';
    private $port = '3306';
    private $dbh;
    public function __construct()
    {   
        $dsn = 'mysql:host='.$this->host.';port='.$this->port.';dbname='.$this->db;
        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]; 
        
        try {
            $this->dbh = new PDO($dsn,$this->user,$this->password, $option);

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die(); 
        }
    }

}

