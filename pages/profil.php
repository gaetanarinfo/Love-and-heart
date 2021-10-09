<?php $result_favorites = selectDB('*', 'favorites', 'user_id = "' . $_SESSION['user_id'] . '" ORDER BY id DESC', $db, '*');  ?>
<?php $result_message = selectDB('*', 'chat_message', 'user_send = "' . $_SESSION['user_id'] . '" ORDER BY id DESC', $db, '*');  ?>
<?php $civilite = selectDB('*', 'civilites', 'id = "' . $user['je_suis'] . '" ORDER BY id DESC', $db, '1');  ?>
<?php $recherche = selectDB('*', 'civilites', 'id = "' . $user['recherche'] . '" ORDER BY id DESC', $db, '1');  ?>

<?php $userSession = selectDB('*', 'users', 'id = "' . $_SESSION['user_id'] . '" ORDER BY id DESC', $db, '1');  ?>

<?php

function loveMatch($userSession, $user)
{

    $value = 0;
    $increment = 100 / 15;

    if ($user['recherche'] == $userSession['recherche']) {
        $value += $increment;
    }

    if ($user['partage'] == $userSession['partage']) {
        $value += $increment;
    }

    if ($user['status_marital'] == $userSession['status_marital']) {
        $value += $increment;
    }

    if ($user['parent'] == $userSession['parent']) {
        $value += $increment;
    }

    if ($user['parent_envie'] == $userSession['parent_envie']) {
        $value += $increment;
    }

    if ($user['niveau_etude'] == $userSession['niveau_etude']) {
        $value += $increment;
    }

    if ($user['taille_adulte'] == $userSession['taille_adulte']) {
        $value += $increment;
    }

    if ($user['poids_adulte'] == $userSession['poids_adulte']) {
        $value += $increment;
    }

    if ($user['cheveux_adulte'] == $userSession['cheveux_adulte']) {
        $value += $increment;
    }

    if ($user['cheveux_color_adulte'] == $userSession['cheveux_color_adulte']) {
        $value += $increment;
    }

    if ($user['origine'] == $userSession['origine']) {
        $value += $increment;
    }

    if ($user['nationalite'] == $userSession['nationalite']) {
        $value += $increment;
    }

    if ($user['religion'] == $userSession['religion']) {
        $value += $increment;
    }

    if ($user['cigarette'] == $userSession['cigarette']) {
        $value += $increment;
    }

    if ($user['loisirs'] == $userSession['loisirs']) {
        $value += $increment;
    }

    return $value;
}

?>

<div class="head">

    <img class="header_logo" src="<?= $static_img ?>header_logo.webp" />

    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="match">
                    <p style="text-transform: uppercase;font-size: 27px;font-weight: 600;font-family: Josefin;">Love Match</p>
                    <div class="hearth_text_mobile"><?= $user['prenom'] ?> <i class="fas fa-infinity" style="font-size: 12px;color: <?= (sexe($user) == "elle") ? "#ce589a" : "#506fb4" ?>;"></i> <?= loveMatch($user, $userSession); ?> % <i class="fas fa-infinity" style="font-size: 12px;color: <?= (sexe($user) == "elle") ? "#ce589a" : "#506fb4" ?>;"></i> <?= $userSession['prenom'] ?></div>
                    <div class="hearth_text_desktop"><?= $user['prenom'] ?> <i class="fas fa-infinity" style="font-size: 19px;color: <?= (sexe($user) == "elle") ? "#ce589a" : "#506fb4" ?>;"></i> <?= $userSession['prenom'] ?></div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-perso progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="9" style="width: <?= loveMatch($user, $userSession); ?>%;"></div>
                        <div class="hearth"><i class="fas fa-heart"></i></div>
                        <div class="hearth_text"><?= loveMatch($user, $userSession); ?> %</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- particles.js container -->
<div id="particles-js"></div>

<?php

function sexe($user)
{
    return ($user['je_suis'] == 2) ? "Il" : "Elle";
}

?>

<div class="container">
    <div class="row g-4 my-5 row-cols-1 row-cols-lg-3 show_mobile">
        <?php include_once('modules/profil-avatar2.php'); ?>

        <div class="col-lg-4">
            <div class="profil_gestion">
                <h3><i class="fas fa-running me-2" aria-hidden="true"></i>Personnalité de <?= $user['prenom'] ?></h3>

                <p class="p_user"><span class="bullet"></span> <?= sexe($user) ?> recherche <?= (sexe($user) == 1) ? "un " : "une " ?><?= $recherche['value'] ?></p>
                <p class="p_user"><span class="bullet"></span> <?= sexe($user) ?> mesure <?= $user['taille_adulte'] . ' cm' ?></p>
                <p class="p_user"><span class="bullet"></span> <?= sexe($user) ?> veux <span style="text-transform: lowercase;"><?= $user['partage'] ?></span></p>
                <p class="p_user"><span class="bullet"></span> Sa silhouette et plutôt <span style="text-transform: lowercase;"><?= $user['poids_adulte'] ?></span></p>
                <p class="p_user"><span class="bullet"></span> <?= sexe($user) ?> est <span style="text-transform: lowercase;"><?= $user['status_marital'] ?></span></p>
                <p class="p_user"><span class="bullet"></span> C'est cheveux sont plutôt <span style="text-transform: lowercase;"><?= $user['cheveux_adulte'] ?></span></p>
                <p class="p_user"><span class="bullet"></span> Sa couleur de cheveux est plutôt <span style="text-transform: lowercase;"><?= $user['cheveux_color_adulte'] ?></span></p>
                <p class="p_user"><span class="bullet"></span> Au niveau des enfants <span style="text-transform: lowercase;"><?= ($user['parent'] == "non") ? "Je n'en ai pas" : "" ?><?= ($user['parent'] == "oui") ? "J'en ai" : "" ?><?= ($user['parent'] == "nsp") ? "Rien n'est décidé" : "" ?></span></p>
                <p class="p_user"><span class="bullet"></span> Sont envie d'enfants <span style="text-transform: lowercase;"><?= ($user['parent'] == "non") ? "Je n'en veux pas" : "" ?><?= ($user['parent'] == "oui") ? "J'en veux" : "" ?><?= ($user['parent'] == "nsp") ? "Rien n'est décidé" : "" ?></span></p>
                <p class="p_user"><span class="bullet"></span> <?= sexe($user) ?> est d'origine <span style="text-transform: lowercase;"><?= $user['origine'] ?></span></p>
                <p class="p_user"><span class="bullet"></span> Son niveau d'étude <span style="text-transform: lowercase;"><?= $user['niveau_etude'] ?></span></p>
                <p class="p_user"><span class="bullet"></span> Sa nationalité est <span style="text-transform: lowercase;"><?= $user['nationalite'] ?></span></p>
                <p class="p_user"><span class="bullet"></span> Sa religion est <span style="text-transform: lowercase;"><?= $user['religion'] ?></span></p>
                <p class="p_user"><span class="bullet"></span> <?= sexe($user) ?> <span style="text-transform: lowercase;"><?= ($user['cigarette'] == "fume-regulierement") ? "Fume régulièrement" : "" ?><?= ($user['cigarette'] == "fume-occasionnellement") ? "Fume occasionnellement" : "" ?><?= ($user['cigarette'] == "essaye-darreter") ? "Essaye d'arrêter" : "" ?><?= ($user['cigarette'] == "ne-fume-pas") ? "Ne fume pas" : "" ?></span></p>
                <p class="p_user"><span class="bullet"></span> <?= sexe($user) ?> aime
                    <span style="text-transform: lowercase;">
                        <?= ($user['loisirs'] == "aller-au-cinema-au-theatre-a-des-concerts") ? "Aller au cinéma, au théâtre, à des concerts" : "" ?>
                        <?= ($user['loisirs'] == "pratiquer-la-speleologie") ? "Pratiquer la spéléologie" : "" ?>
                        <?= ($user['loisirs'] == "participer-a-la-renovation-d-une-maison") ? "Participer à la rénovation d'une maison" : "" ?>
                        <?= ($user['loisirs'] == "aider-un-enfant-a-faire-ses-devoirs") ? "Aider un enfant à faire ses devoirs" : "" ?>
                        <?= ($user['loisirs'] == "pratiquer-un-sport-regulierement") ? "Pratiquer un sport régulièrement" : "" ?>
                        <?= ($user['loisirs'] == "jouer-aux-echecs-aux-dames-a-des-jeux-de-strategie") ? "Jouer aux échecs, aux dames, à des jeux de stratégie" : "" ?>
                        <?= ($user['loisirs'] == "construire-des-maquettes") ? "Construire des maquettes" : "" ?>
                        <?= ($user['loisirs'] == "faire-de-la-poterie-des-bijoux-des-objets-decoratifs") ? "Faire de la poterie, des bijoux, des objets décoratifs" : "" ?>
                        <?= ($user['loisirs'] == "etre-secouriste-pompier-benevole") ? "Etre secouriste, pompier bénévole" : "" ?>
                        <?= ($user['loisirs'] == "aller-en-montagne-faire-de-l-escalade") ? "Aller en montagne, faire de l'escalade" : "" ?>
                        <?= ($user['loisirs'] == "danser") ? "Danser" : "" ?>
                        <?= ($user['loisirs'] == "jardiner") ? "Jardiner" : "" ?>
                        <?= ($user['loisirs'] == "surfer-sur-le-web") ? "Surfer sur le web" : "" ?>
                        <?= ($user['loisirs'] == "faire-du-skate-du-roller-du-VTT") ? "Faire du skate, du roller, du VTT" : "" ?>
                        <?= ($user['loisirs'] == "jouer-aux-jeux-video") ? "Jouer aux jeux vidéo" : "" ?>
                        <?= ($user['loisirs'] == "balade-en-foret") ? "Balade en forêt" : "" ?>
                    </span>
                </p>

            </div>
        </div>

        <div class="col-lg-4">
            <div class="profil_gestion">
                <h3><i class="fas fa-people-arrows me-2" aria-hidden="true"></i>Désir de <?= $user['prenom'] ?></h3>

                <p class="p_user"><span class="bullet"></span> Son age idéal de <?= $user['ideal_age_day'] ?> à <?= $user['ideal_age_byday'] ?> ans</p>
                <p class="p_user"><span class="bullet"></span> Sa taille idéal <?= $user['ideal_taille'] ?> cm</p>
                <p class="p_user"><span class="bullet"></span> Son status marital idéal <?= $user['ideal_status_marital'] ?></p>
                <p class="p_user"><span class="bullet"></span> Sa silhouette idéal <?= $user['ideal_poids'] ?></p>
                <p class="p_user"><span class="bullet"></span> Son idéal enfant <?= ($user['ideal_enfant'] == "non") ? "non" : "" ?><?= ($user['ideal_enfant'] == "oui") ? "oui" : "" ?><?= ($user['ideal_enfant'] == "nsp") ? "rien n'est décidé" : "" ?></p>
                <p class="p_user"><span class="bullet"></span> Son idéal pour le tabac <span style="text-transform: lowercase;"><?= ($user['cigarette'] == "fume-regulierement") ? "fume régulièrement" : "" ?><?= ($user['cigarette'] == "fume-occasionnellement") ? "fume occasionnellement" : "" ?><?= ($user['cigarette'] == "essaye-darreter") ? "essaye d'arrêter" : "" ?><?= ($user['cigarette'] == "ne-fume-pas") ? "ne fume pas" : "" ?></span></p>
                <p class="p_user"><span class="bullet"></span> Son idéal côté loisirs
                    <span style="text-transform: lowercase;">
                        <?= ($user['ideal_loisirs'] == "aller-au-cinema-au-theatre-a-des-concerts") ? "Aller au cinéma, au théâtre, à des concerts" : "" ?>
                        <?= ($user['ideal_loisirs'] == "pratiquer-la-speleologie") ? "Pratiquer la spéléologie" : "" ?>
                        <?= ($user['ideal_loisirs'] == "participer-a-la-renovation-d-une-maison") ? "Participer à la rénovation d'une maison" : "" ?>
                        <?= ($user['ideal_loisirs'] == "aider-un-enfant-a-faire-ses-devoirs") ? "Aider un enfant à faire ses devoirs" : "" ?>
                        <?= ($user['ideal_loisirs'] == "pratiquer-un-sport-regulierement") ? "Pratiquer un sport régulièrement" : "" ?>
                        <?= ($user['ideal_loisirs'] == "jouer-aux-echecs-aux-dames-a-des-jeux-de-strategie") ? "Jouer aux échecs, aux dames, à des jeux de stratégie" : "" ?>
                        <?= ($user['ideal_loisirs'] == "construire-des-maquettes") ? "Construire des maquettes" : "" ?>
                        <?= ($user['ideal_loisirs'] == "faire-de-la-poterie-des-bijoux-des-objets-decoratifs") ? "Faire de la poterie, des bijoux, des objets décoratifs" : "" ?>
                        <?= ($user['ideal_loisirs'] == "etre-secouriste-pompier-benevole") ? "Etre secouriste, pompier bénévole" : "" ?>
                        <?= ($user['ideal_loisirs'] == "aller-en-montagne-faire-de-l-escalade") ? "Aller en montagne, faire de l'escalade" : "" ?>
                        <?= ($user['ideal_loisirs'] == "danser") ? "Danser" : "" ?>
                        <?= ($user['ideal_loisirs'] == "jardiner") ? "Jardiner" : "" ?>
                        <?= ($user['ideal_loisirs'] == "surfer-sur-le-web") ? "Surfer sur le web" : "" ?>
                        <?= ($user['ideal_loisirs'] == "faire-du-skate-du-roller-du-VTT") ? "Faire du skate, du roller, du VTT" : "" ?>
                        <?= ($user['ideal_loisirs'] == "jouer-aux-jeux-video") ? "Jouer aux jeux vidéo" : "" ?>
                        <?= ($user['ideal_loisirs'] == "balade-en-foret") ? "Balade en forêt" : "" ?>
                    </span>
                </p>

            </div>
        </div>
    </div>
</div>