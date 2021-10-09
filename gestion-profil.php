<?php

include 'config/config.php';
include "assets/langs/" . $lang . ".php";
include 'config/fonctions.php';
include 'config/connexion.php';

if(empty($_SESSION['user_id'])) {
    header('Location: /');
}

// Select de l'user
$result = selectDB('*', 'users', 'id = "' . $_SESSION['user_id'] . '"', $db, '1');

// Select de l'avatar
$result_avatar = selectDB('*', 'users_avatar', 'user_id = "' . $_SESSION['user_id'] . '" ORDER BY created_at DESC', $db, '1');

// Select de pays
$result_pays = selectDB('*', 'pays', '1 ORDER BY id ASC', $db, '*');

// Select de civilites
$result_civilites = selectDB('*', 'civilites', '1 ORDER BY id ASC', $db, '*');

class User {
    // Properties
    public $name;

    // Methods
    function set_var($name) {
        $this->name = $name;
    }
    function get_user() {
        return $this->name;
    }
}

class Avatar {
    // Properties
    public $name;

    // Methods
    function set_var($name) {
        $this->name = $name;
    }
    function get_avatar() {
        return $this->name;
    }
}

$email = new User();
$nom = new User();
$prenom = new User();
$adresse = new User();
$ville = new User();
$postalCode = new User();
$country = new User();
$naissance = new User();
$je_suis = new User();
$created_at = new User();
$updated_at = new User();
$zen = new User();
$incognito = new User();
$premium = new User();

$avatar = new Avatar();
$avatar_validation = new Avatar();

$email->set_var($result['email']);
$nom->set_var($result['nom']);
$prenom->set_var($result['prenom']);
$adresse->set_var($result['adresse']);
$ville->set_var($result['ville']);
$postalCode->set_var($result['postalCode']);
$country->set_var($result['country']);
$naissance->set_var($result['naissance']);
$je_suis->set_var($result['je_suis']);
$created_at->set_var($result['created_at']);
$updated_at->set_var($result['updated_at']);
$zen->set_var($result['zen']);
$incognito->set_var($result['incognito']);

$avatar->set_var($result_avatar['value']);
$avatar_validation->set_var($result_avatar['validation']);
$premium->set_var($result['premium']);

include 'modules/header.php';

include 'modules/navbar.php';

include 'pages/gestion-profil.php';

include 'modules/footer.php';
