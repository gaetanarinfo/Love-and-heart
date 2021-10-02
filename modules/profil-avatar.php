<?php $result = selectDB('*', 'users', 'id = "' . $_SESSION['user_id'] . '"', $db, '1'); ?>

<div class="col-lg-4">
    <div class="profil_box">
        <div class="box_avatar">
            <?php if ($avatar_validation->get_avatar() == 1) { ?>
                <img class="avatar" src="https://love-and-heart.fr/assets/uploads/<?= $avatar->get_avatar(); ?>" />
            <?php } else { ?>
                <img class="avatar" src="https://love-and-heart.fr/assets/uploads/default.png" />
            <?php } ?>
        </div>
        <p class="firstname mb-1"><?= $prenom->get_user(); ?></p>
        <p class="birthday_city mb-1"><?= age($naissance->get_user()) . ' ans'; ?> • <?= $ville->get_user(); ?></p>
        <p class="birthday_city mb-1"><?= ($premium->get_user() == 0) ? 'Vous n\'êtes pas abonné.' : '<i class="fas fa-crown me-2" style="color: gold;"></i>Vous êtes abonné' ?></p>
    </div>

    <div class="col-lg-4 profil-w">
        <div class="profil_support">
            <h3><i class="far fa-life-ring me-2"></i>Support</h3>
            <p class="mb-2 mt-3"><a href="mailto:contact@love-and-heart.fr">Service client</a></p>
            <p class="mb-2"><a href="" data-bs-toggle="modal" data-bs-target="#cg">Conditions gnérales</a></p>
            <p class="mb-2"><a href="" data-bs-toggle="modal" data-bs-target="#charte" >Charte d'utilisation des cookies</a></p>
            <p class="mb-2"><a href="" data-bs-toggle="modal" data-bs-target="#securite">Conseils de sécurité</a></p>
            <p class="mb-2"><a href="" data-bs-toggle="modal" data-bs-target="#pc">Politique de confidentialité</a></p>
            <p class="mb-2"><a href="" data-bs-toggle="modal" data-bs-target="#rdc">Règles de comunauté</a></p>
            <p class="mb-2"><a id="delete_profil" href="">Supprimer mon profil</a></p>
            <p class="mb-2"><a href="/gestion-abonnement">Annuler mes abonnements</a></p>
        </div>
    </div>

</div>