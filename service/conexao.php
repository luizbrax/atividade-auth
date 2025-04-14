<?php

class usePDO{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "banco de dados";
    private $instance;

function getInstance(){
    if (empty($this->instance)){
        $this->instance = $this->conection();
    }
    return $this->instance;
}

private function connection()
{
        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
    }
}
}