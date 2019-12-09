<?php
    session_start();
    require_once('./Model/Connexion.php');
    $pdoBuilder = new Connexion();
    $db = $pdoBuilder->getDb();
    if (isset($_GET['ctrl']) && empty($_GET['action'])) {
        $ctrl = $_GET['ctrl'];
    } else {
        $ctrl = 'lamp';
    }
    require_once('./Controller/c_' . $ctrl . '.php');
?>