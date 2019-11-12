<?php

class DBconnect{

    private $dbHost;
    private $dbUser;
    private $dbPassword;
    private $dbName;
    
    protected function connect(){
    
        $this->dbHost = 'localhost';
        $this->dbUser = 'root';
        $this->dbPassword = 'vertrigo';
        $this->dbName = 'data_on_tables';
        
        $conn = new mysqli($this->dbHost, $this->dbUser, $this->dbPassword, $this->dbName);
        
        return $conn;
    }
}