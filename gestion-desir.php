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

$prenom = new User();
$ville = new User();
$naissance = new User();
$recherche = new User();
$je_suis = new User();
$ideal_age_day = new User();
$ideal_age_byday = new User();
$ideal_status_marital = new User();
$ideal_enfant = new User();
$ideal_taille = new User();
$ideal_poids = new User();
$ideal_fume = new User();
$ideal_demarquation = new User();
$ideal_loisirs = new User();
$premium = new User();

$avatar = new Avatar();
$avatar_validation = new Avatar();

$prenom->set_var($result['prenom']);
$je_suis->set_var($result['je_suis']);
$ville->set_var($result['ville']);
$naissance->set_var($result['naissance']);
$recherche->set_var($result['recherche']);
$ideal_age_day->set_var($result['ideal_age_day']);
$ideal_age_byday->set_var($result['ideal_age_byday']);
$ideal_status_marital->set_var($result['ideal_status_marital']);
$ideal_enfant->set_var($result['ideal_enfant']);
$ideal_taille->set_var($result['ideal_taille']);
$ideal_poids->set_var($result['ideal_poids']);
$ideal_fume->set_var($result['ideal_fume']);
$ideal_demarquation->set_var($result['ideal_demarquation']);
$ideal_loisirs->set_var($result['ideal_loisirs']);
$premium->set_var($result['premium']);

$avatar->set_var($result_avatar['value']);
$avatar_validation->set_var($result_avatar['validation']);

include 'modules/header.php';

include 'modules/navbar.php';

include 'pages/gestion-desir.php';

include 'modules/footer.php';
