<?php
require_once __DIR__ . "/../core/Model.php";


class Employee extends Model {

    public function __construct() {
        parent::__construct(); //Calling the parent constructor to execute (Override)
    }

    public function addEmployee($name, $email, $position) {
        echo "add employee $name, $email, $position";
        try {
            $query = "INSERT INTO employees (name, email, position) VALUES (:name, :email, :position)";
        
            $stmt = $this->db->prepare($query);
            
            // Bind values
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':position', $position);
            
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (\Throwable $th) {
            echo "Error: " . $th->getMessage();
        }
    }

    public function updateEmployee($id, $data) {
        // Implementation of updating an employee's details
    }

    public function deleteEmployee($id) {
        // Implementation of deleting an employee
    }

    public function getEmployee($id) {
        // Implementation of retrieving an employee's details
    }
}