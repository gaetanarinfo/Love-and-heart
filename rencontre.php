<?php

include 'config/config.php';
include "assets/langs/" . $lang . ".php";
include 'config/fonctions.php';
include 'config/connexion.php';

if (empty($_SESSION['user_id'])) {
    header('Location: https://love-and-heart.fr/');
}else{

// Select de l'user
$result = selectDB('*', 'users', 'id = "' . $_SESSION['user_id'] . '"', $db, '1');

// Select de l'avatar
$result_avatar = selectDB('*', 'users_avatar', 'user_id = "' . $_SESSION['user_id'] . '" ORDER BY id DESC', $db, '1');

// Select de recherche
$result_recherche = selectDB('*', 'civilites', '1 ORDER BY id ASC', $db, '*');

class User
{
    // Properties
    public $name;

    // Methods
    function set_var($name)
    {
        $this->name = $name;
    }
    function get_user()
    {
        return $this->name;
    }
}

class Avatar
{
    // Properties
    public $name;

    // Methods
    function set_var($name)
    {
        $this->name = $name;
    }
    function get_avatar()
    {
        return $this->name;
    }
}

$prenom = new User();
$ville = new User();
$naissance = new User();
$recherche = new User();
$je_suis = new User();
$partage = new User();
$status_marital = new User();
$parent = new User();
$parent_envie = new User();
$niveau_etude = new User();
$taille_adulte = new User();
$poids_adulte = new User();
$cheveux_adulte = new User();
$cheveux_color_adulte = new User();
$origine = new User();
$nationalite = new User();
$religion = new User();
$cigarette = new User();
$ideal_age_day = new User();
$ideal_age_byday = new User();
$ideal_status_marital = new User();
$ideal_enfant = new User();
$ideal_taille = new User();
$ideal_poids = new User();
$ideal_fume = new User();
$ideal_demarquation = new User();
$premium = new User();

$avatar = new Avatar();
$avatar_validation = new Avatar();

$prenom->set_var($result['prenom']);
$je_suis->set_var($result['je_suis']);
$ville->set_var($result['ville']);
$naissance->set_var($result['naissance']);
$recherche->set_var($result['recherche']);
$partage->set_var($result['partage']);
$status_marital->set_var($result['status_marital']);
$parent->set_var($result['parent']);
$parent_envie->set_var($result['parent_envie']);
$niveau_etude->set_var($result['niveau_etude']);
$taille_adulte->set_var($result['taille_adulte']);
$poids_adulte->set_var($result['poids_adulte']);
$cheveux_adulte->set_var($result['cheveux_adulte']);
$cheveux_color_adulte->set_var($result['cheveux_color_adulte']);
$origine->set_var($result['origine']);
$nationalite->set_var($result['nationalite']);
$religion->set_var($result['religion']);
$cigarette->set_var($result['cigarette']);
$ideal_age_day->set_var($result['ideal_age_day']);
$ideal_age_byday->set_var($result['ideal_age_byday']);
$ideal_status_marital->set_var($result['ideal_status_marital']);
$ideal_enfant->set_var($result['ideal_enfant']);
$ideal_taille->set_var($result['ideal_taille']);
$ideal_poids->set_var($result['ideal_poids']);
$ideal_fume->set_var($result['ideal_fume']);
$ideal_demarquation->set_var($result['ideal_demarquation']);
$premium->set_var($result['premium']);

$avatar->set_var($result_avatar['value']);
$avatar_validation->set_var($result_avatar['validation']);

include 'modules/header.php';

include 'modules/navbar.php';

include 'pages/rencontre.php';

include 'modules/footer.php';

}