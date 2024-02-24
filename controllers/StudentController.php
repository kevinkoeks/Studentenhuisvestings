<?php

require_once __DIR__ . "/../core/Controller.php";
require_once __DIR__ . "/../models/Student.php";

class StudentController extends Controller {
     public function index() {
        $studentModel = $this->loadModel("Student");
        $students = $studentModel->getAllStudents(); // Fetch all students
        $this->loadView('student/listStudents', ['students' => $students]);
    }

    //Adding student to database and returning a success report!
    public function add() {
        $studentModel = $this->loadModel("Student");
        $student = $studentModel->addStudent($_POST["name"], $_POST["email"], $_POST["address"]);
        $this->loadView("successfullCreated", ["student" => $student]);
    }
}