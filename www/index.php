<?php
    session_start();
    require_once('./Model/Connexion.php');
    $pdoBuilder = new Connexion();
    $db = $pdoBuilder->getDb();

    if (( isset($_GET['ctrl']) && !empty($_GET['ctrl']) )&&( isset($_GET['action']) && !empty($_GET['action']) )) {
        $ctrl = $_GET['ctrl'];
        $action = $_GET['action'];
    } else {
        $ctrl = 'lamp';
        $action = 'display';
    }
    
    require_once('./Controller/c_' . $ctrl . '.php');

    $ctrl = "c_" . $ctrl;
    $controller = new $ctrl($db);
    $controller->$action();
?>