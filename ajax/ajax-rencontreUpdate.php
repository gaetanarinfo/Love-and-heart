<?php

include '../config/config.php';
include "../assets/langs/" . $lang . ".php";
include '../config/fonctions.php';
include '../config/connexion.php';

if (!empty($_POST)) {

    $result = selectDB('*', 'users', 'id = "' . $_SESSION['user_id'] . '" ORDER BY id DESC', $db, '1');
    $final = selectDB('*', 'users', 'id != "' . $_SESSION['user_id'] . '" ORDER BY id DESC', $db, '*');

    // Calcul date naissance
    $age = $_POST['age'];
    $date = date('Y');
    $datefinal = $date - $age;
    $sub_naissance = substr($result['naissance'], 0, 4);

    if (!empty($_POST['age']) && $sub_naissance <= $datefinal) {
        
        var_dump($final);

    }

}
