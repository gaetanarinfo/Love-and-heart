<?php

include '../config/config.php';
include '../config/fonctions.php';
include '../config/connexion.php';

date_default_timezone_set('Europe/Paris');
setlocale(LC_TIME, 'fra_fra');

header('Access-Control-Allow-Origin: https://love-and-heart.fr');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, X-Auth-Token');

require_once('../paiement/init.php');

$api_prod = "sk_test_51Jc2kML6rsNO3EBkVY7cW3v8V1otBO3DlOZwLU0lUXdNcqVeudtozSs4DybnecxjTsjzcwh4FkmewQmHDS282XLR00HXRoXWdz";

// This is your real test secret API key.
\Stripe\Stripe::setApiKey($api_prod);

// retrieve JSON from POST body
header('Content-Type: application/json');

// retrieve JSON from POST body
$json_str = file_get_contents('php://input');
$json_obj = json_decode($json_str);
//json_encode($json_obj->items[0]->amount)

$token = $_POST['stripeToken'];
$email = $_POST['stripeEmail'];

try {

	//Type de formule
	$formule = selectDB(
		'*',
		'formules',
		'id = "' . $_GET['formule'] . '"',
		$db,
		1
	);
	
	try {
		$customer = \Stripe\Customer::create(array(
			'email' => $email,
			"description" => $formule['name'] . ' ' . $formule['duration'] . str_replace('.', ',', $formule['price_per_month']) . ' €',
			'source' => $token,
		));

		// $plan = \Stripe\Plan::create(array(
		// 	"product" => [
		// 		"name" => "test"
		// 	],
		// 	"amount" => "2990",
		// 	"currency" => "eur",
		// 	"interval" => "month",
		// 	"interval_count" => 1
		// ));

		if ($_GET['formule'] == "1") {
			try {
				$subscription = \Stripe\Subscription::create(array(
					"customer" => $customer->id,
					"items" => array(
						array(
							"price" => "price_1JfPTCL6rsNO3EBkVZrUaAeu",
						),
					),
				));
			} catch (Exception $e) {
				header('Location: https://love-and-heart.fr/payment/error/' . $formule['id']);
			}
		} else if ($_GET['formule'] == "2") {
			try {
				$subscription = \Stripe\Subscription::create(array(
					"customer" => $customer->id,
					"items" => array(
						array(
							"price" => "price_1JfPVXL6rsNO3EBkwXib9o0H",
						),
					),
				));
			} catch (Exception $e) {
				header('Location: https://love-and-heart.fr/payment/error/' . $formule['id']);
			}
		}

		//Generate a random string.
		$token = openssl_random_pseudo_bytes(16);

		//Convert the binary data into hexadecimal representation.
		$token = bin2hex($token);

		$expired_date = date('Y-m-d H:i:s', strtotime('+6 month'));

		if ($_GET['formule'] == "1") {
			$premium = 1;
		} else if ($_GET['formule'] == "2") {
			$premium = 2;
		}

		$insert = $db->query('INSERT INTO `commandes_histories`(
        `email`, 
        `prenom`, 
        `formule`,
        `statut_transaction`, 
        `transaction_id`,
        `token`,
        `created_at`,
        `expired_date`,
        `after_14`,
        `premium`) VALUES (
        "' . $email . '",
        "' . $_SESSION['prenom'] . '",
        "' . $_GET['formule'] . '",
        "succeeded",
        "' . $subscription->id . '",
        "' . $token . '",
        "' .  date('Y-m-d H:i:s') . '",
        "' . $expired_date . '",
        "' . date('Y-m-d H:i:s', strtotime('+14 days')) . '",
        "' . $premium . '")');

		$insert2 = $db->query('INSERT INTO `commandes_cancel`(`token`,`transaction_id`,`ip`)
        VALUES ("' . $token . '","' . $subscription->id . '","' . $_SERVER['REMOTE_ADDR'] . '")');

		$update_user = $db->query('UPDATE `users` SET `premium` = "' . $premium . '" WHERE id = "' . $_SESSION['user_id'] . '"');

		$tentative = selectDB(
			'*',
			'users_ip',
			'ip = "' . $_SERVER['REMOTE_ADDR'] . '"',
			$db,
			1
		);


		$number = 1;

		if (empty($tentative)) {

			$insert = $db->query('INSERT INTO `users_ip`(
    `id`,
    `ip`,
    `tentative`
)
VALUES (
NULL,
"' . $_SERVER['REMOTE_ADDR'] . '", "' . $number . '")');
		} else if ($tentative['tentative'] < 10) {

			$count = intval($tentative['tentative']);
			$count += 1;

			$update = $db->query('UPDATE `users_ip` SET `tentative` = ' . $count . ' WHERE `ip` = "' . $_SERVER['REMOTE_ADDR'] . '"');
		}

		$from         = 'contact@love-and-heart.fr';
		$from_name     = 'Love and heart';
		$to             = $email;
		$to_name     = $_SESSION['prenom'];
		$reply         = $email;
		$reply_name     = $_SESSION['prenom'];
		$subject     = "Paiement accepté";

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
<div style="text-align: center;padding: 2em 0;">Récapitulatif de votre paiement sur Love and heart :</div><br/>
<div style="text-align: center;padding: 2em 0;">Votre pass ' . $formule['name'] . '</div>
<div style="text-align: center;padding: 2em 0;">Durée de votre pass ' . $formule['duration'] . '</div>
<div style="text-align: center;padding: 2em 0;">Montant par mois ' . str_replace(".", ",", $formule['price_per_month']) . ' € TTC</div>
<div style="text-align: center;padding: 2em 0;">Total pour ' . $formule['duration'] . ' ' . str_replace(".", ",", $formule['total_for_6_month']) . ' € TTC</div>
<div style="text-align: center;padding: 2em 0;">À payer aujourd\'hui ' . str_replace(".", ",", $formule['total']) . ' € TTC</div>
<div style="text-align: center;padding: 2em 0;">Votre abonnement prendra fin le ' . date('d/m/Y H:i:s', strtotime('+6 month')) . '</div><br/>
<div style="text-align: center;padding: 2em 0;">Conformément à l’article Article <a href="https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000032226842/">L221-18</a> du code de la Consommation du 01 juillet 2016,<br/> vous disposez d’un délai légal de 14 jours de rétractation.</div><br/>
<div style="text-align: center;padding: 2em 0;">Pour toutes questions relatives à votre abonnement, merci de prendre contact avec notre service client.</div><br/>
<div style="text-align: center;padding: 2em 0;">Pour annuler cet abonnement, vous pouvez vous rendre sur votre compte dans la section prévue à cet effet.</div><br/>
<div style="text-align: center;padding: 2em 0;">Merci pour votre paiement, et nous, vous souhaitons le meilleur dans votre future relation.</div><br/>
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

		header('Location: https://love-and-heart.fr/payment-renewal/formule/accepted/' . $formule['id']);
	} catch (Exception $e) {
		header('Location: https://love-and-heart.fr/payment/error/' . $formule['id']);
	}
} catch (Error $e) {
	header('Location: https://love-and-heart.fr/payment/error/' . $formule['id']);
}
