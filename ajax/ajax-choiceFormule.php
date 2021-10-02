<?php

include '../config/config.php';
include '../config/fonctions.php';
include '../config/connexion.php';

date_default_timezone_set('Europe/Paris');
setlocale(LC_TIME, 'fra_fra');

if (!empty($_POST)) {

    $select = selectDB('*', 'formules', 'id = "' . $_POST['id_formule'] . '" ORDER BY id DESC', $db, '*');

    echo json_encode($select);

}