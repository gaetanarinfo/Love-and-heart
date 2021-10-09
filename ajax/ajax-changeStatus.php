<?php

include '../config/config.php';
include '../config/fonctions.php';
include '../config/connexion.php';

date_default_timezone_set('Europe/Paris');
setlocale(LC_TIME, 'fra_fra');

if (!empty($_POST)) {

    $update = $db->query('UPDATE `users` SET `connected` = "'. $_POST['status'] .'" WHERE id = "'. $_SESSION['user_id'] .'"');

}