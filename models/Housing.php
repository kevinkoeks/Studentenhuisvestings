<?php

require_once __DIR__ . "/../core/Model.php";

class Housing extends Model {

    public function __construct() {
        parent::__construct();
        $this->checkOrCreateTable();
    }

    private function checkOrCreateTable() {
        $query = "
            CREATE TABLE IF NOT EXISTS housings (
                id INT AUTO_INCREMENT PRIMARY KEY,
                address VARCHAR(255) NOT NULL,
                city VARCHAR(255) NOT NULL,
                type VARCHAR(100),
                rooms INT,
                price DECIMAL(10, 2),
                available_from DATE,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            );
        ";

        $this->db->exec($query);
    }

    public function addHousing($address, $city, $type, $rooms, $price, $available_from) {
        try {
            $query = "INSERT INTO housings (address, city, type, rooms, price, available_from) VALUES (:address, :city, :type, :rooms, :price, :available_from)";
        
            $stmt = $this->db->prepare($query);
            
            // Bind values
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':city', $city);
            $stmt->bindParam(':type', $type);
            $stmt->bindParam(':rooms', $rooms);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':available_from', $available_from);
            
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (\Throwable $th) {
            echo "Error: " . $th->getMessage;
        }
    }

    public function updateHousing($id, $data) {
        // Implementation of updating housing details
    }

    public function deleteHousing($id) {
        // Implementation of removing a housing option
    }

    public function getHousing($id) {
        // Implementation of retrieving housing details
    }
}