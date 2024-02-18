<?php
require_once 'Database.php'; // Ensure this path is correct

//The main Model
class Model {
    protected $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
    }
}
