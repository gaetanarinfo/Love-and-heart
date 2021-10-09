<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

date_default_timezone_set('Europe/Paris');
setlocale(LC_TIME, 'fra_fra');

include '../config/config.php';
include '../config/fonctions.php';
include '../config/connexion.php';

require_once('../paiement/init.php');

// This is your real test secret API key_id.
\Stripe\Stripe::setApiKey('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');

if (!empty($_POST) && !empty($_POST['transaction_id'])) {

    //Verifie le token
    $accept = selectDB(
        '*',
        'commandes_cancel',
        'token = "' . $_POST['token'] . '" AND ip = "' . $_SERVER['REMOTE_ADDR'] . '"',
        $db,
        1
    );


    $tentative = selectDB(
        '*',
        'users_ip',
        'ip = "' . $_SERVER['REMOTE_ADDR'] . '"',
        $db,
        1
    );


    $number = 1;

    if (empty($tentative)) {
    } else if ($tentative['tentative'] < 10) {

        $count = intval($tentative['tentative']);
        $count += 1;

        $update = $db->query('UPDATE `users_ip` SET `tentative` = ' . $count . ' WHERE `ip` = "' . $_SERVER['REMOTE_ADDR'] . '"');
    }

    $commande = selectDB('*', 'commandes_histories', 'transaction_id = "' . $accept['transaction_id'] . '"', $db, 1);

    if (!empty($tentative)) {

        if ($commande['statut_transaction'] != "Remboursée") {

            if ($_SERVER['REMOTE_ADDR'] == $tentative['ip'] && intval($tentative['tentative']) < 10) {

                if (date('Y-m-d H:i:s') < $commande['after_14']) {

                    if (date($commande['expired_date']) >= date('Y-m-d H:i:s')) {

                        if (!empty($accept['transaction_id'])) {

                            try {

                                $select = selectDB(
                                    'id',
                                    'commandes_histories',
                                    'transaction_id = "' . $accept['transaction_id'] . '" AND statut_transaction != "Remboursée"',
                                    $db,
                                    1
                                );

                                if (!empty($select)) {

                                    $subscription = \Stripe\Subscription::retrieve($accept['transaction_id']);
                                    $subscription->cancel();
                
                                    // Mise à jour en base
                                    $update = $db->query('UPDATE `commandes_histories` SET `statut_transaction` = "Remboursée", `refund_at` = "' . date('Y-m-d H:i:s') . '" WHERE transaction_id = "' . $accept['transaction_id'] . '"');

                                    $update_user = $db->query('UPDATE `users` SET `premium` = 0 WHERE id = "' . $_SESSION['user_id'] . '"');

                                    $information_commande = selectDB('*', 'commandes_histories', 'transaction_id = "' . $accept['transaction_id'] . '"', $db, 1);

                                    //Type de formule
                                    $formule = selectDB(
                                        '*',
                                        'formules',
                                        'id = "' . $information_commande['formule'] . '"',
                                        $db,
                                        1
                                    );

                                    //Message de rennvoie pour le remboursement
                                    $from         = 'contact@love-and-heart.fr';
                                    $from_name     = 'Love and heart';
                                    $to             = $information_commande['email'];
                                    $to_name     = $information_commande['prenom'];
                                    $reply         = $information_commande['email'];
                                    $reply_name     = $information_commande['prenom'];
                                    $subject     = "Résiliation de votre abonnement";

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
<div style="text-align: center;padding: 2em 0;">Récapitulatif de votre abonnement sur Love and heart :</div><br/>
<div style="text-align: center;padding: 2em 0;">Votre pass ' . $formule['name'] . '</div>
<div style="text-align: center;padding: 2em 0;">Durée de votre pass ' . $formule['duration'] . '</div>
<div style="text-align: center;padding: 2em 0;">Montant par mois ' . str_replace(".", ",", $formule['price_per_month']) . ' € TTC</div>
<div style="text-align: center;padding: 2em 0;">Total pour ' . $formule['duration'] . ' ' . str_replace(".", ",", $formule['total_for_6_month']) . ' € TTC</div>
<div style="text-align: center;padding: 2em 0;">À payer aujourd\'hui ' . str_replace(".", ",", $formule['total']) . ' € TTC</div><br/>
<div style="text-align: center;padding: 2em 0;">Conformément à l’article Article <a href="https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000032226842/">L221-18</a> du code de la Consommation du 01 juillet 2016,<br/> vous disposez d’un délai légal de 14 jours de rétractation.</div><br/>
    <div style="text-align: center;padding: 2em 0;">Pour toutes questions relatives à votre abonnement, merci de prendre contact avec notre service client.</div><br/>
<div style="text-align: center;padding: 2em 0;">Merci de votre visite, et nous, vous souhaitons le meilleur dans votre future relation.</div><br/>
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

                                    $final = ["passed" => true];
                                } else {
                                    $final = ["passed_commande" => false];
                                }
                            } catch (Error $e) {
                            }
                        }
                    } else {

                        $information_commande = selectDB('*', 'commandes_histories', 'transaction_id = "' . $accept['transaction_id'] . '"', $db, 1);
                        $formule = selectDB('*', 'commandes_histories', 'id = "' . $information_commande['type_formule'] . '"', $db, 1);

                        //Message d'erreur en cas de prestation dépasser
                        $information_commande = selectDB('*', 'commandes_histories', 'transaction_id = "' . $accept['transaction_id'] . '"', $db, 1);

                        //Type de formule
                        $formule = selectDB(
                            '*',
                            'formules',
                            'id = "' . $information_commande['formule'] . '"',
                            $db,
                            1
                        );

                        //Message de rennvoie pour le remboursement
                        $from         = 'contact@love-and-heart.fr';
                        $from_name     = 'Love and heart';
                        $to             = $information_commande['email'];
                        $to_name     = $information_commande['prenom'];
                        $reply         = $information_commande['email'];
                        $reply_name     = $information_commande['prenom'];
                        $subject     = "Résiliation de votre abonnement impossible";

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
<div style="text-align: center;padding: 2em 0;">La résilitation de votre abonnement à échoué :</div>
<div style="text-align: center;padding: 2em 0;">Nous vous rappelons que vous avez 14 jours pour résilier l`\'abonnement passé ce délai, il est donc plus possible de le résilier :</div><br/>
<div style="text-align: center;padding: 2em 0;">Récapitulatif de votre abonnement sur Love and heart :</div><br/>
<div style="text-align: center;padding: 2em 0;">Votre pass ' . $formule['name'] . '</div>
<div style="text-align: center;padding: 2em 0;">Durée de votre pass ' . $formule['duration'] . '</div>
<div style="text-align: center;padding: 2em 0;">Montant par mois ' . str_replace(".", ",", $formule['price_per_month']) . ' € TTC</div>
<div style="text-align: center;padding: 2em 0;">Total pour ' . $formule['duration'] . ' ' . str_replace(".", ",", $formule['total_for_6_month']) . ' € TTC</div>
<div style="text-align: center;padding: 2em 0;">À payer aujourd\'hui ' . str_replace(".", ",", $formule['total']) . ' € TTC</div>
<div style="text-align: center;padding: 2em 0;">Conformément à l’article Article <a href="https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000032226842/">L221-18</a> du code de la Consommation du 01 juillet 2016,<br/> vous disposez d’un délai légal de 14 jours de rétractation.</div>
<div style="text-align: center;padding: 2em 0;">Merci de votre visite, et nous, vous souhaitons le meilleur dans votre future relation.</div>
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


                        $final = ["error_commande_date" => true];
                    }
                } else {

                    $information_commande = selectDB('*', 'commandes_histories', 'transaction_id = "' . $accept['transaction_id'] . '"', $db, 1);
                    $formule = selectDB('*', 'commandes_histories', 'id = "' . $information_commande['type_formule'] . '"', $db, 1);

                    //Message d'erreur en cas de prestation dépasser

                    $information_commande = selectDB('*', 'commandes_histories', 'transaction_id = "' . $accept['transaction_id'] . '"', $db, 1);
                    $formule = selectDB('*', 'commandes_histories', 'id = "' . $information_commande['type_formule'] . '"', $db, 1);

                    //Message d'erreur en cas de prestation dépasser
                    $information_commande = selectDB('*', 'commandes_histories', 'transaction_id = "' . $accept['transaction_id'] . '"', $db, 1);

                    //Type de formule
                    $formule = selectDB(
                        '*',
                        'formules',
                        'id = "' . $information_commande['formule'] . '"',
                        $db,
                        1
                    );

                    //Message de rennvoie pour le remboursement
                    $from         = 'contact@love-and-heart.fr';
                    $from_name     = 'Love and heart';
                    $to             = $information_commande['email'];
                    $to_name     = $information_commande['prenom'];
                    $reply         = $information_commande['email'];
                    $reply_name     = $information_commande['prenom'];
                    $subject     = "Résiliation de votre abonnement impossible";

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
<div style="text-align: center;padding: 2em 0;">La résilitation de votre abonnement à échoué :</div>
<div style="text-align: center;padding: 2em 0;">Nous vous rappelons que vous avez 14 jours pour résilier l`\'abonnement passé ce délai, il est donc plus possible de le résilier :</div><br/>
<div style="text-align: center;padding: 2em 0;">Récapitulatif de votre abonnement sur Love and heart :</div><br/>
<div style="text-align: center;padding: 2em 0;">Votre pass ' . $formule['name'] . '</div>
<div style="text-align: center;padding: 2em 0;">Durée de votre pass ' . $formule['duration'] . '</div>
<div style="text-align: center;padding: 2em 0;">Montant par mois ' . str_replace(".", ",", $formule['price_per_month']) . ' € TTC</div>
<div style="text-align: center;padding: 2em 0;">Total pour ' . $formule['duration'] . ' ' . str_replace(".", ",", $formule['total_for_6_month']) . ' € TTC</div>
<div style="text-align: center;padding: 2em 0;">À payer aujourd\'hui ' . str_replace(".", ",", $formule['total']) . ' € TTC</div>
<div style="text-align: center;padding: 2em 0;">Conformément à l’article Article <a href="https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000032226842/">L221-18</a> du code de la Consommation du 01 juillet 2016,<br/> vous disposez d’un délai légal de 14 jours de rétractation.</div>
<div style="text-align: center;padding: 2em 0;">Merci de votre visite, et nous, vous souhaitons le meilleur dans votre future relation.</div>
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

                    $final = ["error_commande_date" => true];
                }
            } else {
                $final = ["blocked" => true];
            }
        } else {
            $final = ["refund" => false];
        }
    } else {
        if (empty($tentative)) {

            //Message d'erreur en cas de prestation dépasser

            $information_commande = selectDB('*', 'commandes_histories', 'transaction_id = "' . $accept['transaction_id'] . '"', $db, 1);
            $formule = selectDB('*', 'commandes_histories', 'id = "' . $information_commande['type_formule'] . '"', $db, 1);

            //Message d'erreur en cas de prestation dépasser
            $information_commande = selectDB('*', 'commandes_histories', 'transaction_id = "' . $accept['transaction_id'] . '"', $db, 1);

            //Type de formule
            $formule = selectDB(
                '*',
                'formules',
                'id = "' . $information_commande['formule'] . '"',
                $db,
                1
            );

            //Message de rennvoie pour le remboursement
            $from         = 'contact@love-and-heart.fr';
            $from_name     = 'Love and heart';
            $to             = $information_commande['email'];
            $to_name     = $information_commande['prenom'];
            $reply         = $information_commande['email'];
            $reply_name     = $information_commande['prenom'];
            $subject     = "Résiliation de votre abonnement impossible";

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
<div style="text-align: center;padding: 2em 0;">La résilitation de votre abonnement à échoué :</div>
<div style="text-align: center;padding: 2em 0;">Nous vous rappelons que vous avez 14 jours pour résilier l`\'abonnement passé ce délai, il est donc plus possible de le résilier :</div><br/>
<div style="text-align: center;padding: 2em 0;">Récapitulatif de votre abonnement sur Love and heart :</div><br/>
<div style="text-align: center;padding: 2em 0;">Votre pass ' . $formule['name'] . '</div>
<div style="text-align: center;padding: 2em 0;">Durée de votre pass ' . $formule['duration'] . '</div>
<div style="text-align: center;padding: 2em 0;">Montant par mois ' . str_replace(".", ",", $formule['price_per_month']) . ' € TTC</div>
<div style="text-align: center;padding: 2em 0;">Total pour ' . $formule['duration'] . ' ' . str_replace(".", ",", $formule['total_for_6_month']) . ' € TTC</div>
<div style="text-align: center;padding: 2em 0;">À payer aujourd\'hui ' . str_replace(".", ",", $formule['total']) . ' € TTC</div>
<div style="text-align: center;padding: 2em 0;">Conformément à l’article Article <a href="https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000032226842/">L221-18</a> du code de la Consommation du 01 juillet 2016,<br/> vous disposez d’un délai légal de 14 jours de rétractation.</div>
<div style="text-align: center;padding: 2em 0;">Merci de votre visite, et nous, vous souhaitons le meilleur dans votre future relation.</div>
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

            $final = ["error_commande_date" => true];
        } else {
            $final = ["passed" => false];
        }
    }
}

echo json_encode($final);
