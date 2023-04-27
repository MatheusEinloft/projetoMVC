<?php

class Database {

    private $host = '172.17.0.2';
    private $db = 'projetomvc';
    private $user = 'root';
    private $password = 'root';
    private $port = '3306';
    private $dbh;
    private $stmt;
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

    public function query($sql)
    {
        $this->stmt = $this->dbh->prepare($sql);
    }

    public function bind($parametro, $valor, $tipo = null)
    {
        if(is_null($tipo)){
            switch(true){

                case is_int($valor):
                    $tipo = PDO::PARAM_INT;
                break;

                case is_bool($valor):
                    $tipo = PDO::PARAM_BOOL;
                break;

                case is_null($valor):
                    $tipo = PDO::PARAM_NULL;
                break;

                default:
                    $tipo = PDO::PARAM_STR;
            }
            
        }

        $this->stmt->bindValue($parametro, $valor, $tipo);
    }

    public function exec()
    {
        return $this->stmt->execute();
    }

    public function result()
    {
        $this->exec();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    public function results()
    {
        $this->exec();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function totalResults()
    {
        return $this->stmt->rowCount();
    }

    public function ultimoIdInserido()
    {
        return $this->dbh->lastInsertId();
    }

}   

