<?php

include 'config/config.php';
include "assets/langs/" . $lang . ".php";
include 'config/fonctions.php';
include 'config/connexion.php';

if ($_COOKIE['welcome'] == "non") {
    header('Location: https://love-and-heart.fr/');
}

if(!empty($_SESSION['user_id'])) {
    header('Location: https://love-and-heart.fr/');
}

include 'modules/header.php';

include 'modules/navbar.php';

include 'pages/welcome.php';

include 'modules/footer.php';