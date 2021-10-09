<?php

include 'config/config.php';
include "assets/langs/" . $lang . ".php";
include 'config/fonctions.php';
include 'config/connexion.php';

if(!empty($_SESSION['user_id'])) {
    header('Location: /');
}

include 'modules/header.php';

include 'modules/navbar.php';

include 'pages/register.php';

include 'modules/footer.php';
