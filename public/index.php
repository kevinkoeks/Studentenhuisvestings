<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

require_once __DIR__ . '/../core/Model.php';
require_once __DIR__ . "/../models/Student.php";
require_once __DIR__ . "/../models/Employee.php";


echo "Running Project";
$runModel = new Model();

$testStud = new Student();
$testStud->addStudent("Sami", "sami@stud.nl", "Peper 1");

$testEmplo = new Employee();
$testEmplo->addEmployee("Ben", "ben1@ams.nl", "adminitration");
echo "Ending Project";
