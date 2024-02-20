<?php

require_once __DIR__ . "/../core/Controller.php";
require_once __DIR__ . "/../models/Housing.php";

class HousingController extends Controller {

    public function index() {
        $housingModel = $this->loadModel("Housing");
        $arrayWithHouses = $housingModel->getAllHousings();
        $this->loadView("housing/listHousing", ["listAllHouses" => $arrayWithHouses]);
    }

    //Adding housing to database and returning a success report!
    public function add() {
        $housingModel = $this->loadModel("Housing");
        $housing = $housingModel->addHousing($_POST["address"], $_POST["city"], $_POST["type"], 
                                            $_POST["rooms"], $_POST["price"], $_POST["available_from"]);
        $this->loadView("successfullCreated", ["housing" => $housing]);
    }
}