<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

date_default_timezone_set('Europe/Paris');
setlocale(LC_TIME, 'fra_fra');

include '../config/config.php';
include '../config/fonctions.php';
include '../config/connexion.php';

if (!empty($_POST)) {

    $update = $db->query('UPDATE `users` SET `ideal_age_day` = "'. $_POST['ideal_age_day'] .'", `ideal_age_byday` = "'. $_POST['ideal_age_byday'] .'", `ideal_status_marital` = "'. $_POST['ideal_status_marital'] .'", `ideal_enfant` = "'. $_POST['ideal_enfant'] .'", `ideal_taille` = "'. $_POST['ideal_taille'] .'", `ideal_poids` = "'. $_POST['ideal_poids'] .'", `ideal_fume` = "'. $_POST['ideal_fume'] .'", `ideal_demarquation` = "'. $_POST['demarquation'] .'", `ideal_loisirs` = "'. $_POST['ideal_loisirs'] .'" WHERE id = "'. $_SESSION['user_id'] .'"');

    $final = ["updated" => true];

}else{
    $final = ["updated" => false];
}

echo json_encode($final);