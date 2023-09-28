<?php
class Controller {

    function index(){
        include '../Views/base.php';
    }

    function addTask(){
        include '../Views/addForm.php';
    }


}

$controller = new Controller;

include '../Database/Database.php';



if (isset($_GET['page']) && $_GET['page'] == "addTask"){
    $controller->addTask();

}

else{
    $controller->index();
}

