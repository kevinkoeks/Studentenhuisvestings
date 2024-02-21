<?php
require_once __DIR__ . "/../core/Controller.php";

class EmployeeController extends Controller {
    public function index($id) {
        $employeeModel = $this->loadModel("Employee");
        $employeeInfo = $employeeModel->getEmployee($id);
        $this->loadView("employee/listEmployee", ["employee" => $employeeInfo]);
    }

    public function update($id, $data) {
        $employeeModel = $this->loadModel("Employee");
        $updateEmployee = $employeeModel->updateEmployee($id, $data);
        $this->loadView("successfullCreated", ["employee" => $updateEmployee]);
    }
}