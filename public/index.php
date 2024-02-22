<?php
// Assuming this is the entry point in the public directory

// Display errors for debugging - you might want to remove or modify this in production
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Then proceed with your routing logic...


require_once __DIR__ . "/../config/config.php";
require_once __DIR__ . "/../core/Database.php";
require_once __DIR__ . '/../core/Model.php';
require_once __DIR__ . "/../models/Student.php";
require_once __DIR__ . "/../models/Employee.php";
require_once __DIR__ . "/../models/Housing.php";
require_once __DIR__ . "/../core/Controller.php";



// Define the base path of the application
$basePath = 'ExamenKlas-Training/Studentenhuisvestings/public';

// Get the full request URI and remove the base path to isolate the route
$requestUri = $_SERVER['REQUEST_URI'];
$routePath = str_replace('/' . $basePath, '', $requestUri);
$routePath = trim($routePath, '/');

// Now, explode the remaining part of the URI to get the route
$routeParts = explode('/', $routePath);
$route = $routeParts[0] ?: 'home'; // Default to 'home' if the route is empty

switch ($route) {
    case '':
    case 'home':
        // Make sure the path to home.php is correct
        require_once __DIR__ . '/../views/home.php';
        break;
    case 'student':
        echo "inside student";
        // Make sure you have a StudentsController and it is named correctly
        require_once __DIR__ . '/../controllers/StudentController.php';
        $controller = new StudentController();
        $controller->index();
        break;
    case 'addStudent':
        echo "adding student";
        // Make sure you have a StudentsController and it is named correctly
        require_once __DIR__ . '/../controllers/StudentController.php';
        $controller = new StudentController();
        $controller->add();
        break;    
    case 'listAllHousing':
        echo "list All Housing";
        require_once __DIR__ . '/../controllers/HousingController.php';
        $controller = new HousingController();
        $controller->index();
        break;    
    case 'addHousing':
        echo "adding Housing";
        require_once __DIR__ . '/../controllers/HousingController.php';
        $controller = new HousingController();
        $controller->add();
        break;  
    case 'register':
        echo "register employee";
        require_once __DIR__ . '/../controllers/EmployeeController.php';
        $controller = new EmployeeController();
        $employeeData = ["name" => $_POST["name"], "email" => $_POST["email"], 
                        "position" => $_POST["position"], "password" => $_POST["password"]];

        $controller->add($employeeData);
        break;     
    case 'login':
        echo "login employee";
        // require_once __DIR__ . '/../controllers/EmployeeController.php';
        // $controller = new EmployeeController();
        // $employeeData = ["name" => $_POST["name"], "email" => $_POST["email"], 
        //                 "position" => $_POST["position"], "password" => $_POST["password"]];

        // $controller->add($employeeData);
        break;    
    case 'updateEmployee':
        echo "update employee";
        require_once __DIR__ . '/../controllers/EmployeeController.php';
        $controller = new EmployeeController();
        if (!isset($_POST['id'])) {
            $controller->index(1);
        } else {
            $id = $_POST["id"];
            $employeeData = ["name" => $_POST["name"], "email" => $_POST["email"], "position" => $_POST["position"]];
            $controller->update($id, $employeeData);
        }
        break;   
    default:
        // Make sure the path to 404.php is correct
        echo "Uri: " . $requestUri . "<br>";
        echo "Error?: " . $route;
        break;
}

// Further PHP code, if needed, should go here
