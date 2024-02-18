<?php
require_once __DIR__ . "/../core/Database.php"; // Ensure this path is correct
// require_once __DIR__ . "/../models/Student.php";
// require_once __DIR__ . "/../models/Employee.php";


//The main Model
class Model {
    protected $db;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->getConnection();
    }
}
