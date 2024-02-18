<?php
require_once __DIR__ . "/../config/config.php";
class Database {
    private $host = DB_HOST; // Defined in config.php
    private $db_name = DB_NAME; // Defined in config.php
    private $username = DB_USER; // Defined in config.php
    private $password = DB_PASS; // Defined in config.php
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
