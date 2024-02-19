<?php

require_once __DIR__ . "/../core/Model.php";


class Student extends Model {
     public function __construct() {
        parent::__construct(); //Calling the parent constructor to execute, will force call the parent constructor
    }
    public function addStudent($name, $email, $address) {
    // Implementation of adding a student
        try {
            $query = "INSERT INTO students (name, email, address) VALUES (:name, :email, :address)";

            $stmt = $this->db->prepare($query);

            // Bind values avoids SQL injections
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":address", $address);

            if($stmt->execute()) {
                return true;
            }

            return false;
        } catch (\Throwable $th) {
            echo "Error: " . $th->getMessage();
        }
    } 

    public function getAllStudents() {
        try {
            $query = "SELECT id, name, email, address FROM students";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            // $dataFromDB = $stmt->fetch(PDO::FETCH_ASSOC);

            $students = [];
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $students[] = $row;
            }

            return $students;
        } catch (\Throwable $th) {
            echo "Error: " . $th->getMessage();
        }
    }

    public function updateStudent($id, $data) {
        // Implementation of updating student's data
    }

    public function deleteStudent($id) {
        // Implementation of deleting a student
    }

    public function getStudent($id) {
        // Implementation of retrieving a student's details
    }
}