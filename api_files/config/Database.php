<?php

// Database Class
class Database {
    // Database Properties
    private $host = 'localhost:3307';
    private $db_name = 'attend';
    private $username = 'phpstorm';
    private $password = 'phpstormsql';
    private $connection = null;

    // Function for making connection with database
    public function connect() {
        try {
            // connecting to database
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->username,
                $this->password);
//            echo 'Success!';
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }

        return $this->connection;
    }
}

//$database = new Database;
//$db = $database->connect();
