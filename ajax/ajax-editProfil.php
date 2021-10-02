<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

date_default_timezone_set('Europe/Paris');
setlocale(LC_TIME, 'fra_fra');

include '../config/config.php';
include '../config/fonctions.php';
include '../config/connexion.php';

if (!empty($_POST)) {

    $update = $db->query('UPDATE `users` SET `prenom` = "'. $_POST['prenom'] .'", `nom` = "'. $_POST['nom'] .'", `naissance` = "'. $_POST['naissance'] .'", `je_suis` = "' . $_POST['civilite'] . '", `adresse` = "'. $_POST['adresse'] .'", `ville` = "'. $_POST['ville'] .'", `postalCode` = "'. $_POST['postalCode'] .'", `country` = "'. $_POST['country'] .'", `updated_at` = "' . date('Y-m-d H:i:s') . '" WHERE id = "'. $_SESSION['user_id'] .'"');

    $final = ["updated" => true];

}else{
    $final = ["updated" => true];
}

echo json_encode($final);