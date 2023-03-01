<?php

class Database{
    private $host="localhost";
    private $username="root";
    private $password="";
    private $database="btth01_cse485";

    private $conn = NULL;
    private $result = NULL;
    public function connect(){
        $this->conn= new mysqli($this->host, $this->username, $this->password, $this->database);
        if(!$this->conn){
            echo "ket noi that bai";
            exit();
        }
        else{
            mysqli_set_charset($this->conn,'utf8');
        }
        return $this->conn;
    }


}