<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

date_default_timezone_set('Europe/Paris');
setlocale(LC_TIME, 'fra_fra');

include '../config/config.php';
include '../config/fonctions.php';
include '../config/connexion.php';

if (!empty($_POST)) {

    $update = $db->query('UPDATE `users` SET `recherche` = "'. $_POST['recherche'] .'", `partage` = "'. $_POST['partage'] .'", `status_marital` = "'. $_POST['status_marital'] .'", `parent` = "'. $_POST['parent'] .'", `parent_envie` = "'. $_POST['parent_envie'] .'", `niveau_etude` = "'. $_POST['niveau_etude'] .'", `taille_adulte` = "'. $_POST['taille_adulte'] .'", `poids_adulte` = "'. $_POST['poids_adulte'] .'", `cheveux_adulte` = "'. $_POST['cheveux_adulte'] .'", `cheveux_color_adulte` = "'. $_POST['cheveux_color_adulte'] .'", `origine` = "'. $_POST['origine'] .'", `nationalite` = "'. $_POST['nationalite'] .'", `religion` = "'. $_POST['religion'] .'", `cigarette` = "'. $_POST['cigarette'] .'" WHERE id = "'. $_SESSION['user_id'] .'"');

    $final = ["updated" => true];

}else{
    $final = ["updated" => true];
}

echo json_encode($final);