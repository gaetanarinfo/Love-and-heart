<?php

include '../config/config.php';
include "../assets/langs/" . $lang . ".php";
include '../config/fonctions.php';
include '../config/connexion.php';

if(!empty($_POST)) {

    $result = selectDB('*', 'favorites', 'user_id = "' . $_SESSION['user_id'] . '" AND fav_user_id = "' . $_POST['fav_user_id'] . '"', $db, '*');

    if(empty($result)) {

        $final = ['favorites' => true];
        
		$insert = $db->query('INSERT INTO `favorites`(`user_id`,`fav_user_id`)
        VALUES ("' . $_SESSION['user_id'] . '","' . $_POST['fav_user_id'] . '")');

    }else{

        $final = ['favorites' => false];

    }

    echo json_encode($final);

}