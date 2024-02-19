<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studenthuisvesting Dashboard</title>
</head>
<body>
    
</body>
</html>

<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

require_once __DIR__ . '/../core/Model.php';
require_once __DIR__ . "/../models/Student.php";
require_once __DIR__ . "/../models/Employee.php";
require_once __DIR__ . "/../models/Housing.php";


echo "Running Project";
$runModel = new Model();

$testStud = new Student();
$testStud->addStudent("Senn", "senn@stud.nl", "Peper 5");

$testEmplo = new Employee();
$testEmplo->addEmployee("Youssef", "youssef@ams.nl", "adminitration");
echo "Ending Project";

$testHousing = new Housing();
$testHousing->addHousing("Peper 2", "Amsterdam", "Studio", 1, 650.99, 05 - 10 - 2024);

//
// //Here's a simplified example of how index.php might decide to load home.php:
//
// // Inside public/index.php
// require_once '../config/config.php'; // Load configuration
// require_once '../core/Database.php'; // Setup database connection
// // Other bootstrap tasks...

// // Basic routing (for illustration only)
// $page = $_GET['page'] ?? 'home'; // Default to 'home' if no page specified

// switch ($page) {
//     case 'home':
//         require_once '../views/home.php';
//         break;
//     case 'students':
//         // Assume StudentsController handles student-related actions
//         require_once '../controllers/StudentsController.php';
//         $controller = new StudentsController();
//         $controller->index(); // Method to handle listing students or showing a student form
//         break;
//     // Add more cases for other pages
//     default:
//         require_once '../views/404.php'; // Show a 404 error page if no matching route
// }
