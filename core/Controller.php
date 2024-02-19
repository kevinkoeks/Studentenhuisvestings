<?php
require_once __DIR__ . "/../core/Database.php";

class Controller {
    protected $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
    }

    //Method to load a model
    public function loadModel($typeModel) {
        require_once __DIR__ . "/../models/" . $typeModel . ".php"; // Adding the file with the model Class in it
        return new $typeModel(); // Technique is called: Variable class names. variable to class 
    }

    //Method to load a view and pass data to it
    public function loadView($typeView, $data = []) {
        if (file_exists(__DIR__ . '/../views/' . $typeView . '.php')) {
                // Extracts vars to current view scope. The extracted data will be availabel for the viewType to show
                extract($data);
                require_once __DIR__ . '/../views/' . $typeView . '.php';
            } else {
                die("View does not exist.");
            }
    }
}