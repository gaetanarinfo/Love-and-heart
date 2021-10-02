<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

date_default_timezone_set('Europe/Paris');
setlocale(LC_TIME, 'fra_fra');

include '../config/config.php';
include '../config/fonctions.php';
include '../config/connexion.php';

if (!empty($_POST)) {

    if($_POST['form'] == 1) $update = $db->query('UPDATE `users` SET `zen` = "'. $_POST['etat'] .'" WHERE id = "'. $_SESSION['user_id'] .'"');

    if($_POST['form'] == 2) $update = $db->query('UPDATE `users` SET `incognito` = "'. $_POST['etat'] .'" WHERE id = "'. $_SESSION['user_id'] .'"');

    $final = ["updated" => true];

}else{
    $final = ["updated" => true];
}

echo json_encode($final);