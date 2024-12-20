<?php


require_once 'config.php';
class Database {
    private $username;
    private $password;
    private $host;
    private $database;


    public function __construct()
    {
        $this->username = USERNAME;
        $this->password = PASSWORD;
        $this->host = HOST;
        $this->database = DATABASE;
    }

    public function connect() {
        try {
            $dsn = "pgsql:host=$this->host;port=5432;dbname=$this->database";
            $conn = new PDO($dsn, $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

}