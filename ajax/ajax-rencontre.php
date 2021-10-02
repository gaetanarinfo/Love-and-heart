<?php

include '../config/config.php';
include "../assets/langs/" . $lang . ".php";
include '../config/fonctions.php';
include '../config/connexion.php';

// Select de l'user
$result = selectDB('*', 'users', 'id = "' . $_SESSION['user_id'] . '"', $db, '1');

// Select all users

// $results = $db->query('SELECT u.*, u.id as id, ua.* FROM users u LEFT JOIN users_avatar ua ON u.id = ua.user_id AND ua.id = (SELECT ua1.id FROM users_avatar ua1 WHERE ua.user_id = ua1.user_id ORDER BY ua1.id DESC LIMIT 1) ORDER BY u.created_at, u.id DESC LIMIT 0,30');
$results = selectDB('*', 'users', '1 ORDER BY id DESC', $db, '*');

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

class Users
{
    // Properties
    public $name;

    // Methods
    function set_var($name)
    {
        $this->name = $name;
    }
    function get_users()
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

$users = new Users();

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

$users->set_var($results);

?>

<div class="ps-2 pe-2 box_profil">

    <?php foreach ($users->get_users() as $key => $data) {  ?>

        <?php $result_avatar = selectDB('*', 'users_avatar', 'user_id = "' . $data['user_id'] . '" ORDER BY id DESC', $db, '1'); ?>

        <?php $result_favorites = selectDB('*', 'favorites', 'fav_user_id = "' . $data['id'] . '" ORDER BY id DESC', $db, '1');  ?>

            <?php if ($data['id'] != $_SESSION['user_id']) { ?>

                <div class="card mb-2 mt-2 ms-2 me-2 empty_click_card empty_click_card_<?= $data['id'] ?> d-inline-block">

                    <div class="row">

                        <div class="col-md-4 avatar" data-id="<?= $data['id'] ?>">
                            <?php if ($result_avatar['validation'] == 1) { ?>
                                <img class="empty_avatar_<?= $data['id'] ?>" src="https://love-and-heart.fr/assets/uploads/<?= $result_avatar['value']; ?>" />
                            <?php } else { ?>
                                <img class="empty_avatar_<?= $data['id'] ?>" src="https://love-and-heart.fr/assets/uploads/default.png" />
                            <?php } ?>
                        </div>
                        <div class="col-md-8 empty_click_card_desc empty_click_card_desc_<?= $data['id'] ?>">
                            <div class="card-body">
                                <h5 class="card-title"><a class="profil_link" href="/profil/<?= $data['prenom'] ?>"><?= $data['prenom'] ?></a>
                                    <div class="float-end ">
                                        <div class="ms-2 <?php if ($result_favorites['fav_user_id'] != $data['id']) { ?>hearts<?php } else { ?>hearts_cancel<?php } ?> d-inline-block" data-id="<?= $data['id'] ?>" data-user="<?= $_SESSION['user_id'] ?>">
                                            <?php if ($result_favorites['fav_user_id'] != $data['id']) { ?><i class="far fa-heart heart_fa_<?= $data['id'] ?>" style="color: red;"></i><i class="fas fa-heart heart_fa2_<?= $data['id'] ?>" style="color: red; display: none;"></i><?php } else { ?>
                                                <i class="fas fa-heart heart_fa2_<?= $data['id'] ?>" style="color: red;"></i><i class="fas fa-heart heart_fa_<?= $data['id'] ?>" style="color: red;display:none;"></i><?php } ?>
                                        </div>

                                        <div class="me-2 ms-2 msg d-inline-block" data-id="<?= $data['id'] ?>">
                                            <i class="far fa-comment-dots msg_fa_<?= $data['id'] ?>" style="color: #2bb412;"></i>
                                            <i class="fas fa-comment-dots msg_fa2_<?= $data['id'] ?>" style="color: #2bb412; display: none;"></i>
                                        </div>
                                    </div>
                                </h5>
                                <p class="card-desc"><?= $data['ideal_demarquation'] ?></p>
                                <p class="card-text"><small class="text-muted">Mise à jour il y a <?= set_minutes($data['updated_at']); ?></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

    <?php } ?>
</div>