<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

date_default_timezone_set('Europe/Paris');
setlocale(LC_TIME, 'fra_fra');

include '../config/config.php';
include '../config/fonctions.php';
include '../config/connexion.php';

$delete = $db->query('DELETE FROM `users` WHERE id = "' . $_POST['user_id'] . '"');

session_destroy(); //destroy the session

exit();