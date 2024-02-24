<?php
require_once __DIR__ . "/../core/Model.php";


class Employee extends Model {

    public function __construct() {
        parent::__construct(); //Calling the parent constructor to execute (Override)
    }

    public function loginEmployee($data) {
        // Start a new session
        session_start();

        try {
            // Check if the form is submitted
            $email = $data['email'];
            $password = $data['password'];

            // Will use employee email (unique) to get employee's info/data
            $query = "SELECT * FROM employees WHERE email = :email LIMIT 1";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $employee = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verify password with the hashed password in DB
            if ($employee && password_verify($password, $employee['password'])) {
                // Authentication successful - set session variables
                $_SESSION['employee_id'] = $employee['id'];
                $_SESSION['employee_name'] = $employee['name'];
                $_SESSION['employee_email'] = $employee['email'];
                $_SESSION["employeeLoggedIn"] = true;
                
                return $employee;
            } else {
                echo "<p>Invalid email or password.</p>";
                return false;
            }
        } catch (\Throwable $th) {
            echo "Error: " . $th->getMessage();
        }
    }

    public function addEmployee($data) {
        echo "register employee ";
        
        try {
            $name = $data["name"];
            $email = $data["email"];
            $position = $data["position"];
            $password = password_hash($data["password"], PASSWORD_DEFAULT); // Hash the password

            // Before inserting a new employee, check if the email already exists
            $query = "SELECT * FROM employees WHERE email = :email LIMIT 1";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                echo "<p>Email already in use. Please choose another email.</p>";
            } else {
                $query = "INSERT INTO employees (name, email, position, password) VALUES (:name, :email, :position, :password)";
            
                $stmt = $this->db->prepare($query);
                
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':position', $position);
                $stmt->bindParam(':password', $password);
                
                if ($stmt->execute()) {
                    $employee = ['name' => $name, 'email' => $email, 'position' => $position];
                    return $employee;
                } else {
                    return false;
                }
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