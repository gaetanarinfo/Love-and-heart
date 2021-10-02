<?php

include 'config/config.php';
include "assets/langs/" . $lang . ".php";
include 'config/fonctions.php';
include 'config/connexion.php';

if(!empty($_SESSION['user_id'])) {
    header('Location: /');
}

if (!empty($_SESSION['token'])) {
    $users = selectDB('*', 'users', 'token = "' . $_SESSION['token'] . '"', $db, '1');
}

if ($_GET['token'] != $_SESSION['token'] && $_GET['token'] != $users['token']) {
    header('Location: /');
}

include 'modules/header.php';

include 'modules/navbar.php';

include 'pages/forgot-confirm.php';

include 'modules/footer.php';
