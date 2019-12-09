<?php

include "Model/Connexion.php";

$db = new Connexion;

if($db) {
    echo "Connexion done!!\n";
}
echo $db->getInfoDb();
