<!doctype html>

<html lang="<?= $lang ?>">

<head>

  <title>Love and heart.fr - Site de Rencontre - Recherche de l’âme sœur</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
  <meta name="description" content="Inscrivez-vous gratuitement sur Love and heart, site de rencontres sérieux où vous pourrez consulter les profils de milliers de célibataires à travers la France." />
  <meta name="author" content="Gaëtan Seigneur">
  <meta name="robots" content="noindex, nofollow">

  <link rel="canonical" href="https://love-and-heart.store/">

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
      "url": "https://love-and-heart.store/",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://love-and-heart.store/faq/?query={search}",
        "query-input": "required name=search"
      }
    }
  </script>

</head>

<body class="d-flex flex-column h-100">