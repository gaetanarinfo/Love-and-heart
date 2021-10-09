<?php

include '../config/config.php';
include '../config/fonctions.php';
include '../config/connexion.php';

date_default_timezone_set('Europe/Paris');
setlocale(LC_TIME, 'fra_fra');

if (!empty($_POST)) {

    $verif_ip = selectDB('*', 'users_ip', 'ip = "' . $_SERVER['REMOTE_ADDR'] . '" ORDER BY id DESC', $db, '1');

    $countIp = intval($verif_ip['tentative']);
    $countIp += 1;

    if (empty($verif_ip)) {

        $db->query('INSERT INTO `users_ip`(
            `id`,
            `ip`,
            `tentative`
            ) VALUES (
            NULL,
            "' . $_SERVER['REMOTE_ADDR'] . '",
            1
            )');
    } else {
        $update = $db->query('UPDATE `users_ip` SET `tentative` = ' . $countIp . ' WHERE `ip` = "' . $_SERVER['REMOTE_ADDR'] . '"');
    }

    if (intval($verif_ip['tentative']) < 3) {

        $verif_email = selectDB('*', 'users', 'email = "' . $_POST['email'] . '" ORDER BY id DESC', $db, '*');

        if (empty($verif_email)) {

            $password_encode = md5($_POST['password']);
            $created_at = date('Y-m-d H:i:s');

            $db->query('INSERT INTO `users`(
                    `id`,
                    `email`,
                    `password`
                    ) VALUES (
                    NULL,
                    "' . $_POST['email'] . '",
                    "' . $password_encode . '",
                    )');

            $from         = 'contact@love-and-heart.fr';
            $from_name     = 'Love and heart';
            $to             = $_POST['email'];
            $to_name     = $_POST['prenom'];
            $reply         = $_POST['email'];
            $reply_name     = $_POST['prenom'];
            $subject     = "Inscription sur Love and heart";

            $header = '<html lang="FR">

        <head>
        
            <title>Love and heart.fr - Site de Rencontre - Recherche de l’âme sœur</title>
            <meta name="title" content="Love and heart.fr - Site de Rencontre - Recherche de l’âme sœur">
            <meta name="description" content="Inscrivez-vous gratuitement sur Love and heart, site de rencontres sérieux où vous pourrez consulter les profils de milliers de célibataires à travers la France.">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
            <meta name="author" content="Gaëtan Seigneur">
            <meta name="robots" content="index,follow">
        
            <!-- Primary Meta Tags -->
            <title>Love and heart.fr - Site de Rencontre - Recherche de l’âme sœur</title>
            <meta name="title" content="Love and heart.fr - Site de Rencontre - Recherche de l’âme sœur">
            <meta name="description" content="Inscrivez-vous gratuitement sur Love and heart, site de rencontres sérieux où vous pourrez consulter les profils de milliers de célibataires à travers la France.">
        
            <!-- Open Graph / Facebook -->
            <meta property="og:type" content="website">
            <meta property="og:url" content="https://love-and-heart.fr/">
            <meta property="og:title" content="Love and heart.fr - Site de Rencontre - Recherche de l’âme sœur">
            <meta property="og:description" content="Inscrivez-vous gratuitement sur Love and heart, site de rencontres sérieux où vous pourrez consulter les profils de milliers de célibataires à travers la France.">
            <meta property="og:image" content="https://love-and-heart.frhttps://love-and-heart.fr/assets/img/header_logo.png">
        
            <!-- Twitter -->
            <meta property="twitter:card" content="summary_large_image">
            <meta property="twitter:url" content="https://love-and-heart.fr/">
            <meta property="twitter:title" content="Love and heart.fr - Site de Rencontre - Recherche de l’âme sœur">
            <meta property="twitter:description" content="Inscrivez-vous gratuitement sur Love and heart, site de rencontres sérieux où vous pourrez consulter les profils de milliers de célibataires à travers la France.">
            <meta property="twitter:image" content="https://love-and-heart.frhttps://love-and-heart.fr/assets/img/header_logo.png">
        
            <link rel="canonical" href="https://love-and-heart.fr/">
        
            <!-- Icon -->
            <script src="https://love-and-heart.fr/assets/js/9d1d83a1dd.js" crossorigin="anonymous"></script>
        
            <!-- Style -->
            <link href="https://love-and-heart.fr/assets/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
            <link href="https://love-and-heart.fr/assets/css/style.css" rel="stylesheet" type="text/css">
            <link href="https://love-and-heart.fr/assets/css/navbar.css" rel="stylesheet" type="text/css">
            <link href="https://love-and-heart.fr/assets/css/footer.css" rel="stylesheet" type="text/css">
        
            <!-- Home -->
            <link href="https://love-and-heart.fr/assets/css/home.css" rel="stylesheet" type="text/css">
        
            <!-- Welcome -->
        
            <!-- Pay -->
        
            <!-- Fonts -->
            <link rel="preconnect" href="https://fonts.gstatic.com">
        
            <meta name="theme-color" content="#f5f5f5">
        
            <!-- Favicons -->
            <link rel="apple-touch-icon" href="https://love-and-heart.fr/assets/favicons/apple-touch-icon.png" sizes="180x180">
            <link rel="icon" href="https://love-and-heart.fr/assets/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
            <link rel="icon" href="https://love-and-heart.fr/assets/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
            <link rel="manifest" href="https://love-and-heart.fr/assets/favicons/manifest.json">
            <link rel="mask-icon" href="https://love-and-heart.fr/assets/favicons/safari-pinned-tab.svg" color="#f5f5f5">
            <link rel="icon" href="https://love-and-heart.fr/assets/favicons/favicon.ico">
        
        </head>
        
        <body class="d-flex flex-column h-100">
        
            <div class="head" style="top: 0px;margin: 0 auto;padding: 0 0;text-align: center;">
                <a href="https://love-and-heart.fr">
                    <img style="text-align: center;margin: 0 auto;width: 420px;" class="header_logo" src="https://love-and-heart.fr/assets/img/header_logo.png">
                </a>
            </div>';

            $body = '
        <div style="text-align: center;padding: 2em 0;">Récapitulatif de votre inscription sur Love and heart :</div><br/>
        <div style="text-align: center;padding: 2em 0;">Votre adresse email : ' . $_POST['email'] . '</div>
        <div style="text-align: center;padding: 2em 0;">Le ' . date('d/m/Y à H:i:s') . '</div><br/>
        <div style="text-align: center;padding: 2em 0;">Vos informations sont confidentielles, nous ne les diffuserons jamais.</div>
        <div style="text-align: center;padding: 2em 0;">Si vous désirez vous désinscrire, il faudra vous rendre dans la gestion de votre compte.</div>
        <div style="text-align: center;padding: 2em 0;">Merci de votre inscription, et nous, vous souhaitons le meilleur dans votre future relation.</div>
        <div style="text-align: center;border: 1px solid #ccc;margin: 20px auto;width:80%;background: #ccc;height: 1px;"></div>
        ';

            $footer = '<footer class="footer mt-auto py-3 bg-light" style="position: static;bottom: 0;width: 100%;">
        <div class="container text-center">
            <div class="footer_block">
                <p>Une visibilité étendue de votre profil : En créant votre profil sur Love and heart, celui-ci est visible sur les déclinaisons locales de notre service utilisant la même plateforme sous différentes marques. Pour plus d’informations sur
                    les modalités de visibilité étendue de votre profil, cliquez ici.</p>
                <p>*Rencontres gratuites</p>
                <p>**Estimation du nombre de couples formés sur les sites du groupe Love and heart en Europe. Chiffre obtenu par l’extrapolation des résultats d’une enquête réalisée par Research Now en avril 2018, sur 59 931 personnes résidant en Europe
                    (France, Royaume-Uni, Allemagne, Pays-Bas, Italie, Espagne et Suède) âgés de plus de 18 ans, à la population totale de cette tranche d’âge (Source eurostat 2018). Il résulte de cette étude que 6% des personnes interrogées ont déclaré
                    avoir été en couple avec une personne rencontrée sur un des sites du groupe Love and heart.</p>
                <p>***Selon une étude TNS réalisée pour Love and heart du 30 octobre au 8 novembre 2017, sur un échantillon représentatif de 1660 célibataires âgés de 18 à 65 ans en France. Résultats observés parmi des célibataires connaissant au moins un
                    service de rencontre en ligne.</p>
                <p>****Chaque description et photo de profil est modérée</p>
            </div><br/>
            <span class="text-black" style="text-align: center;"> © Copyright - Seigneur Gaëtan - <a href="https://love-and-heart.fr">Love and heart</a> - 2021</span>
        </div>
    </footer>

</body>

</html>';

            $content = $header;
            $content .= $body;
            $content .= $footer;

            sendMail($from, $from_name, $to, $to_name, $reply, $reply_name, $subject, $content, $config, false);

            $final = ["register" => true, "message" => "Votre demande d'inscription est reussie."];
        } else {
            $final = ["register" => false, "message" => "L'adresse email existe déjà."];
        }
    } else {
        $final = ["register" => false, "message" => "Désoler, votre compte ou votre ip on été bloquer, mesure de sécurité."];
    }
} else {
    $final = ["register" => false, "message" => "Une erreur est survenue."];
}

echo json_encode($final);
