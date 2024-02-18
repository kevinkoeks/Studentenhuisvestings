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