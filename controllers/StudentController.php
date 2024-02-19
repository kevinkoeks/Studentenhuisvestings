<?php

require_once __DIR__ . "/../core/Controller.php";
// require_once __DIR__ . "/../models/Student.php";

class StudentController extends Controller {
     public function index() {
        $studentModel = $this->loadModel("Student");
        $students = $studentModel->getAllStudents(); // Fetch all students
        $this->loadView('listStudents', ['students' => $students]);
    }
}