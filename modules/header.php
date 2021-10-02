<!doctype html>

<html lang="<?= $lang ?>">

<head>

  <?php

  $title = "Love and heart.fr - Site de Rencontre - Recherche de l’âme sœur";

  switch ($_SERVER['REQUEST_URI']) {
    case '/rencontre':
      $title = "Love and heart.fr - Trouvez l'amour, c'est par ici et c'est simple...";
      break;

    case '/gestion-abonnement':
      $title = "Love and heart.fr - Gestion de mes abonnements";
      break;

    case '/gestion-profil':
      $title = "Love and heart.fr - Gestion de mes informations personels";
      break;

    case '/gestion-photo':
      $title = "Love and heart.fr - Gestion de mes photos de profil";
      break;

    case '/gestion-desir':
      $title = "Love and heart.fr - Gestion de mes désirs";
      break;

    case '/gestion-personnalite':
      $title = "Love and heart.fr - Gestion de ma personnalité";
      break;

      case '/coup-de-coeur':
        $title = "Love and heart.fr - Mes coups de coeur";
        break;

    case '/forgot-confirm':
      $title = "Love and heart.fr - Confirmer le changement du mot de passe";
      break;

    case '/payment':
      $title = "Love and heart.fr - Choix d'un abonnement";
      break;

    case '/payment-renewal':
      $title = "Love and heart.fr - Choix d'un abonnement";
      break;

    case '/payment-renewal-accepted':
      $title = "Love and heart.fr - Paiement accepter";
      break;

    case '/payment-error':
      $title = "Love and heart.fr - Paiement refusé";
      break;

    case '/404':
      $title = "Love and heart.fr - Page erreur 404";
      break;

    default:
      $title = "Love and heart.fr - Site de Rencontre - Recherche de l’âme sœur";
      break;
  }

  ?>
  <title><?= $title; ?></title>
  <meta name="title" content="<?= $title; ?>">
  <meta name="description" content="Inscrivez-vous gratuitement sur Love and heart, site de rencontres sérieux où vous pourrez consulter les profils de milliers de célibataires à travers la France.">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
  <meta name="author" content="Gaëtan Seigneur">
  <meta name="robots" content="index,follow">

  <!-- Primary Meta Tags -->
  <title><?= $title; ?></title>
  <meta name="title" content="<?= $title; ?>">
  <meta name="description" content="Inscrivez-vous gratuitement sur Love and heart, site de rencontres sérieux où vous pourrez consulter les profils de milliers de célibataires à travers la France.">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://love-and-heart.fr/">
  <meta property="og:title" content="<?= $title; ?>">
  <meta property="og:description" content="Inscrivez-vous gratuitement sur Love and heart, site de rencontres sérieux où vous pourrez consulter les profils de milliers de célibataires à travers la France.">
  <meta property="og:image" content="https://love-and-heart.fr/assets/img/header_logo.png">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://love-and-heart.fr/">
  <meta property="twitter:title" content="<?= $title; ?>">
  <meta property="twitter:description" content="Inscrivez-vous gratuitement sur Love and heart, site de rencontres sérieux où vous pourrez consulter les profils de milliers de célibataires à travers la France.">
  <meta property="twitter:image" content="https://love-and-heart.fr/assets/img/header_logo.png">

  <link rel="canonical" href="https://love-and-heart.fr/">

  <!-- Icon -->
  <script src="<?= $static_url ?>js/9d1d83a1dd.js" crossorigin="anonymous"></script>

  <!-- Style -->
  <link href="<?= $static_url ?>bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
  <link href="<?= $static_url ?>css/style.css?<?= time() ?>" rel="stylesheet" type="text/css" />
  <link href="<?= $static_url ?>css/navbar.css?<?= time() ?>" rel="stylesheet" type="text/css" />
  <link href="<?= $static_url ?>css/footer.css?<?= time() ?>" rel="stylesheet" type="text/css" />

  <!-- Home -->
  <?php if ($_SERVER['REQUEST_URI'] == "/") { ?>
    <link href="<?= $static_url ?>css/home.css?<?= time() ?>" rel="stylesheet" type="text/css" />
  <?php } ?>

  <!-- Welcome -->
  <?php if ($_SERVER['REQUEST_URI'] == "/welcome") { ?>
    <link href="<?= $static_url ?>css/welcome.css?<?= time() ?>" rel="stylesheet" type="text/css" />
  <?php } ?>

  <!-- Pay -->
  <?php if ($_SERVER['REQUEST_URI'] == "/payment") { ?>
    <link href="<?= $static_url ?>css/payment.css?<?= time() ?>" rel="stylesheet" type="text/css" />
  <?php } ?>

  <!-- Forgot -->
  <?php if ($_SERVER['REQUEST_URI'] == "/forgot-confirm/" . $_GET['token'] . "") { ?>
    <link href="<?= $static_url ?>css/home.css?<?= time() ?>" rel="stylesheet" type="text/css" />
  <?php } ?>

  <?php if (!empty($_SESSION['user_id'])) { ?>
    <!-- Gestion profil -->
    <?php if ($_SERVER['REQUEST_URI'] == "/gestion-profil") { ?>
      <link href="<?= $static_url ?>css/gestion-profil.css?<?= time() ?>" rel="stylesheet" type="text/css" />
    <?php } ?>

    <!-- Gestion personnalite -->
    <?php if ($_SERVER['REQUEST_URI'] == "/gestion-personnalite") { ?>
      <link href="<?= $static_url ?>css/gestion-personnalite.css?<?= time() ?>" rel="stylesheet" type="text/css" />
    <?php } ?>

    <!-- Gestion desir -->
    <?php if ($_SERVER['REQUEST_URI'] == "/gestion-desir") { ?>
      <link href="<?= $static_url ?>css/gestion-desir.css?<?= time() ?>" rel="stylesheet" type="text/css" />
    <?php } ?>

    <!-- Gestion photo -->
    <?php if ($_SERVER['REQUEST_URI'] == "/gestion-photo") { ?>
      <link href="<?= $static_url ?>css/gestion-photo.css?<?= time() ?>" rel="stylesheet" type="text/css" />
    <?php } ?>

    <!-- Gestion abonnement -->
    <?php if ($_SERVER['REQUEST_URI'] == "/gestion-abonnement") { ?>
      <link href="<?= $static_url ?>css/gestion-abonnement.css?<?= time() ?>" rel="stylesheet" type="text/css" />
    <?php } ?>

    <!-- Paiement user -->
    <?php if ($_SERVER['REQUEST_URI'] == "/payment-renewal") { ?>
      <link href="<?= $static_url ?>css/payment-renewal.css?<?= time() ?>" rel="stylesheet" type="text/css" />
    <?php } ?>

    <!-- Paiement user -->
    <?php if ($_SERVER['REQUEST_URI'] == "/payment-renewal/formule/accepted/" . $_GET['formule']) { ?>
      <link href="<?= $static_url ?>css/payment-renewal-accepted.css?<?= time() ?>" rel="stylesheet" type="text/css" />
    <?php } ?>

    <!-- Paiement user -->
    <?php if ($_SERVER['REQUEST_URI'] == "/payment/error/" . $_GET['formule']) { ?>
      <link href="<?= $static_url ?>css/payment-error.css?<?= time() ?>" rel="stylesheet" type="text/css" />
    <?php } ?>

    <!-- Rencontre -->
    <?php if ($_SERVER['REQUEST_URI'] == "/rencontre") { ?>
      <link href="<?= $static_url ?>css/rencontre.css?<?= time() ?>" rel="stylesheet" type="text/css" />
    <?php } ?>

    <!-- Gestion abonnement -->
    <?php if ($_SERVER['REQUEST_URI'] == "/coup-de-coeur") { ?>
      <link href="<?= $static_url ?>css/coup-de-coeur.css?<?= time() ?>" rel="stylesheet" type="text/css" />
    <?php } ?>


  <?php } ?>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">

  <meta name="theme-color" content="#f5f5f5">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="<?= $static_url ?>favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="<?= $static_url ?>favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="<?= $static_url ?>favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="<?= $static_url ?>favicons/manifest.json">
  <link rel="mask-icon" href="<?= $static_url ?>favicons/safari-pinned-tab.svg" color="#f5f5f5">
  <link rel="icon" href="<?= $static_url ?>favicons/favicon.ico">

  <script src="<?= $static_url ?>bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <script src="<?= $static_url ?>js/jquery.min.js" crossorigin="anonymous"></script>

  <script href="<?= $static_url ?>js/jquery.tablesorter.js" crossorigin="anonymous"></script>

  <script type="application/ld+json">
    {
      "@context": "https://www.schema.org",
      "@type": "Website",
      "name": "Love and heart.fr - Site de Rencontre",
      "url": "https://love-and-heart.fr/",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://love-and-heart.fr/faq/?query={search}",
        "query-input": "required name=search"
      }
    }
  </script>

  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Website",
      "url": "https://love-and-heart.fr/",
      "logo": "https://love-and-heart.fr/assets/logo.png"
    }
  </script>

  <script data-ad-client="pub-4139181293520081" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-TV9SD7BM7X"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-TV9SD7BM7X');
  </script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-207903832-1">
  </script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-207903832-1');
  </script>

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-MTJW8TF');
  </script>
  <!-- End Google Tag Manager -->

</head>

<body class="d-flex flex-column h-100">

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MTJW8TF" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->