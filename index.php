<?php

    require_once './Controllers/BaseController.php';
    require_once './Core/Database.php';
    require_once './Models/BaseModel.php';

    $controllerName = ucfirst(strtolower($_REQUEST['controller'])) . 'Controller';
    $actionName = $_REQUEST['action'];
    $id = $_REQUEST['id'] ?? null;


    require_once "./Controllers/${controllerName}.php";

    $controllerObject = new $controllerName;
    $controllerObject->$actionName($id);

?>