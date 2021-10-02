<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
      <img src="<?= $static_img ?>logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Love and heart
    </a>

    <?php if (!empty($_SESSION['user_id'])) { ?>
      <div class="mobile-nav">
        <a href="/gestion-abonnement" class="btn btn-primary btn-navbar-a nav-mobile me-2">Mes abonnements</a>
        <a href="/gestion-profil" class="btn btn-primary btn-navbar nav-mobile me-2">Mon compte</a>
        <a href="/gestion-photo" class="btn btn-navbar-p nav-mobile me-2">Ma photo</a>
        <a href="/gestion-personnalite" class="btn btn-navbar-s nav-mobile me-2">Ma personnalité</a>
        <a href="/gestion-desir" class="btn btn-navbar-m nav-mobile me-2">Mon désir</a>
        <a href="" class="btn btn-info btn-logout nav-mobile">Se déconnecter</a>
      </div>
    <?php } else { ?>
      <a class="btn btn-primary btn-navbar show_login nav-mobile">Mon compte</a>
    <?php } ?>
  </div>
</nav>