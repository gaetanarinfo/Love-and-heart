<?php

header("Cache-Control: max-age=31536000");

include 'config/config.php';
include "assets/langs/" . $lang . ".php";
include 'config/fonctions.php';
include 'config/connexion.php';

include 'modules/header.php';

include 'modules/navbar.php';

include 'pages/home.php';

include 'modules/footer.php';
