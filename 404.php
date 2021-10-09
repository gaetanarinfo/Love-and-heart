<?php

include 'config/config.php';
include "assets/langs/" . $lang . ".php";
include 'config/fonctions.php';
include 'config/connexion.php';

include 'modules/header.php';

include 'modules/navbar.php';

?>

<link href="<?= $static_url ?>css/404.css?<?= time() ?>" rel="stylesheet" type="text/css" />

<?php

include 'pages/404.php';

include 'modules/footer.php';
