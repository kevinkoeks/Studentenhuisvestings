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

    public function getEmployee(int $id) {
        try {
            $query = "SELECT * FROM employees WHERE id = :id";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $employee = $stmt->fetch(PDO::FETCH_ASSOC);

            return $employee;
        } catch (\Throwable $th) {
            // Handle any errors, for example, log them or display a user-friendly message
            echo "Error retrieving employee: " . $th->getMessage();
        }
    }


    public function updateEmployee($id, $data) {
    try {

        // Construct the SQL statement with placeholders
        $query = "UPDATE employees SET name = :name, email = :email, position = :position WHERE id = :id";
        
        // Prepare the statement
        $stmt = $this->db->prepare($query);
        
        // Bind values to placeholders
        $stmt->bindValue(':name', $data['name']);
        $stmt->bindValue(':email', $data['email']);
        $stmt->bindValue(':position', $data['position']);
        $stmt->bindValue(':id', $id);
        
        // Execute the statement
        $stmt->execute();
        
        // Check if the update was successful
        if ($stmt->rowCount() > 0) {
            return $data;
        } else {
            // No rows affected, indicating the ID might not exist or data hasn't changed
            return false;
        }
    } catch (\PDOException $e) {
        // Handle exception
        echo "Error updating employee: " . $e->getMessage();
        return false;
    }
}

    public function deleteEmployee($id) {
        // Implementation of deleting an employee
    }

}