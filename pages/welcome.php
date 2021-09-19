<?php
if ($_COOKIE['welcome'] != "oui") {
    header('Location: https://love-and-heart.store/');
    exit;
}
?>

<div class="head">

    <img class="header_logo" src="<?= $static_img ?>header_logo.png" />

</div>

<?php if ($_COOKIE['etapes'] == 1) { ?>

    <section class="py-5 pb-0" id="accept">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h2 class="fw-bolder mb-0">
                        <p class="title">Notre charte d'engagement</p>
                    </h2>
                    <p class="subtitle">Voici les quatre règles qui nous tiennent à coeur.</p>
                </div>
                <div class="col-lg-8">
                    <div class="row gx-5 row-cols-1 row-cols-md-2">
                        <div class="col mb-5 h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="fas fa-heartbeat"></i></div>
                            <h2 class="h5">Respect mutuel</h2>
                            <p class="mb-0">C'est la base d'une vraie histoire alors privilégiez les échanges respectueux dès le début.</p>
                        </div>
                        <div class="col mb-5 h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="far fa-smile-beam"></i></div>
                            <h2 class="h5">Soyez sincère</h2>
                            <p class="mb-0">Un profil (photos, âge, infos) qui vous reflète vraiment sera toujours plus séduisant.</p>
                        </div>
                        <div class="col mb-5 mb-md-0 h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="fas fa-user-lock"></i></div>
                            <h2 class="h5">Restez prudent</h2>
                            <p class="mb-0">Échangez via les messages, les appels vidéo et audio avant de donner vos infos personnelles.</p>
                        </div>
                        <div class="col h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="far fa-bell"></i></div>
                            <h2 class="h5">Pas de compromis</h2>
                            <p class="mb-0">Signalez et bloquez toute personne qui ne jouerait pas le jeu de la sincérité ou du respect.</p>
                        </div>

                        <div class="col mb-5 mb-md-0 h-100 mt-3">
                            <a href="" class="btn btn-info btn-accept next_slide">J'accepte</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php } ?>

<section class="py-5 pb-0" id="bienvenue" <?php if ($_COOKIE['etapes'] == 3) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 23) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 22) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 21) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 20) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 19) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 18) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 17) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 16) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 15) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 14) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 13) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 13) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 10) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 9) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 8) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 7) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 6) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 5) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 4) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 2) { ?>style="display: block;" <?php } else if ($_COOKIE['etapes'] == 1) { ?>style="display: none;" <?php } ?>>
    <div class="container px-5 my-5">
        <div class="row gx-5">

            <img class="mini-heart" src="<?= $static_img ?>mini-heart.png" />

            <p class="title2">Bienvenue sur Love and heart <?= $_COOKIE['prenom']; ?> !</p>

            <p class="subtitle2">On a très envie d’en savoir plus sur vous...</p>
            <p class="subtitle2">Complétez votre profil en 5 minutes et ne soyez pas timide&nbsp;!<br>Plus vous vous dévoilez, plus vous aurez de chance de faire de belles recontres.</p>

            <div class="col-lg-12">

                <div class="col mb-5 mb-md-0 h-100 text-center">
                    <a href="" class="btn btn-info btn-accept next_slide2">C'est parti !</a>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="py-5 pb-0" id="partage" <?php if ($_COOKIE['etapes'] == 3) { ?>style="display: block;" <?php } else if ($_COOKIE['etapes'] == 23) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 22) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 21) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 20) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 19) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 18) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 17) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 16) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 15) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 14) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 13) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 13) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 10) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 9) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 8) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 7) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 6) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 5) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 4) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 2) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 1) { ?>style="display: none;" <?php } ?>>
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="fw-bolder mb-0">
                    <p class="title">Êtes-vous prête à vous engager dans une relation ?</p>
                </h2>
                <p class="subtitle">Célibataire endurcie ou cœur à prendre ? Dites-le maintenant, vous gagnerez du temps !</p>
            </div>
            <div class="col-lg-6">
                <div class="row gx-5 row-cols-1 row-cols-md-2">
                    <div class="col mb-5 h-100 text-center">
                        <a href="" class="link_c relation_choice" data-id="Une vraie histoire">
                            <p class="mb-3 mt-2">Une vraie histoire</p>
                        </a>
                        <a href="" class="link_c relation_choice" data-id="De nouvelles rencontres">
                            <p class="mb-3">De nouvelles rencontres</p>
                        </a>
                        <a href="" class="link_c relation_choice" data-id="Je ne sais pas encore">
                            <p class="mb-0">Je ne sais pas encore</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 pb-0" id="status_marital" <?php if ($_COOKIE['etapes'] == 4) { ?>style="display: block;" <?php } else if ($_COOKIE['etapes'] == 23) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 22) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 21) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 20) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 19) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 18) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 17) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 16) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 15) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 14) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 13) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 13) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 10) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 9) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 8) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 7) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 6) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 5) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 3) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 2) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 1) { ?>style="display: none;" <?php } ?>>
    <div class="container px-5 my-5">
        <div class="row gx-5 text-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="fw-bolder mb-0">
                    <p class="title">Quel est votre statut marital ?</p>
                </h2>
                <p class="subtitle">Votre bio amoureuse pourrait en intéresser plus d’un. Partagez-la !</p>
            </div>
            <div class="col-lg-6">
                <div class="row gx-5 row-cols-1 row-cols-md-2">
                    <div class="col mb-5 h-100">
                        <a href="" class="link_c status_marital_choice" data-id="célibataire">
                            <p class="mb-3 mt-2">célibataire</p>
                        </a>
                        <a href="" class="link_c status_marital_choice" data-id="séparée">
                            <p class="mb-3">séparée</p>
                        </a>
                        <a href="" class="link_c status_marital_choice" data-id="veuve">
                            <p class="mb-0">veuve</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 pb-0" id="parent" <?php if ($_COOKIE['etapes'] == 5) { ?>style="display: block;" <?php } else if ($_COOKIE['etapes'] == 23) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 22) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 21) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 20) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 19) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 18) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 17) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 16) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 15) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 14) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 13) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 13) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 10) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 9) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 8) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 7) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 6) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 4) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 3) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 2) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 1) { ?>style="display: none;" <?php } ?>>
    <div class="container px-5 my-5">
        <div class="row gx-5 text-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="fw-bolder mb-0">
                    <p class="title">Êtes-vous parent ?</p>
                </h2>
                <p class="subtitle">Vous avez des mini-moi ? Petit détail qui peut faire la différence !</p>
            </div>
            <div class="col-lg-6 pt-2 pb-2 text-center">
                <div class="row">
                    <div class="col mb-5 h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-0"><i class="fas fa-baby-carriage"></i></div>
                        <a href="" class="link_c parent_choice" data-id="J'en ai">
                            <p class="mb-3 mt-3">J'en ai</p>
                        </a>
                    </div>
                    <div class="col mb-5 h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-0"><i class="fas fa-male"></i></div>
                        <a href="" class="link_c parent_choice" data-id="Je n'en ai pas">
                            <p class="mb-3 mt-3">Je n'en ai pas</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 pb-0" id="parent_envie" <?php if ($_COOKIE['etapes'] == 6) { ?>style="display: block;" <?php } else if ($_COOKIE['etapes'] == 23) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 22) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 21) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 20) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 19) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 18) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 17) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 16) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 15) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 14) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 13) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 13) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 10) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 9) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 8) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 7) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 5) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 4) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 3) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 2) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 1) { ?>style="display: none;" <?php } ?>>
    <div class="container px-5 my-5 text-center">
        <div class="row gx-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="fw-bolder mb-0">
                    <p class="title">Envie d’enfants ?</p>
                </h2>
                <p class="subtitle">Parce que même si on n'en est pas là, c’est toujours bon à savoir...</p>
            </div>
            <div class="col-lg-6 pt-2 pb-2 text-center">
                <div class="row">
                    <div class="col mb-5 h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-0"><i class="fas fa-check"></i></div>
                        <a href="" class="link_c parent_envie_choice" data-id="J'en veux">
                            <p class="mb-3 mt-3">J'en veux</p>
                        </a>
                    </div>
                    <div class="col mb-5 h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-0"><i class="fas fa-times"></i></div>
                        <a href="" class="link_c parent_envie_choice" data-id="Je n'en veux pas">
                            <p class="mb-3 mt-3">Je n'en veux pas</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 pb-0" id="niveau_etude" <?php if ($_COOKIE['etapes'] == 7) { ?>style="display: block;" <?php } else if ($_COOKIE['etapes'] == 23) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 22) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 21) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 20) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 19) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 18) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 17) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 16) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 15) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 14) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 13) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 13) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 10) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 9) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 8) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 6) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 5) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 4) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 3) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 2) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 1) { ?>style="display: none;" <?php } ?>>
    <div class="container px-5 my-5">
        <div class="row gx-5 text-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="fw-bolder mb-0">
                    <p class="title">Quel est votre niveau d'études ?</p>
                </h2>
                <p class="subtitle">Brevet des collèges, BEP, Bac, +2, +4, +8 ? C’est le moment de clamer votre amour des études (ou pas...) !</p>
            </div>
            <div class="col-lg-6 pt-2 pb-2">
                <div class="row">
                    <div class="col mb-5 h-100">
                        <a href="" class="link_c niveau_etude" data-id="niveau lycée et inférieur">
                            <p class="mb-3">niveau lycée et inférieur</p>
                        </a>

                        <a href="" class="link_c niveau_etude" data-id="bac">
                            <p class="mb-3 mt-3">bac</p>
                        </a>

                        <a href="" class="link_c niveau_etude" data-id="bac +2">
                            <p class="mb-3 mt-3">bac +2</p>
                        </a>

                        <a href="" class="link_c niveau_etude" data-id="bac +3">
                            <p class="mb-3 mt-3">bac +3</p>
                        </a>

                        <a href="" class="link_c niveau_etude" data-id="bac +4">
                            <p class="mb-3 mt-3">bac +4</p>
                        </a>

                        <a href="" class="link_c niveau_etude" data-id="bac +5 et plus">
                            <p class="mb-3 mt-3">bac +5 et plus</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 pb-0" id="taille_adulte" <?php if ($_COOKIE['etapes'] == 8) { ?>style="display: block;" <?php } else if ($_COOKIE['etapes'] == 23) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 22) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 21) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 20) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 19) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 18) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 17) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 16) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 15) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 14) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 13) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 13) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 10) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 9) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 7) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 6) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 5) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 4) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 3) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 2) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 1) { ?>style="display: none;" <?php } ?>>
    <div class="container px-5 my-5 ">
        <div class="row gx-5 text-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="fw-bolder mb-0">
                    <p class="title">Quelle taille faites-vous ?</p>
                </h2>
                <p class="subtitle">Rappelez-vous : tout ce qui est petit est mignon, et tout ce qui est grand est charmant !</p>
            </div>
            <div class="col-lg-6 pt-2 pb-2">
                <div class="row">
                    <div class="col mb-5 h-100">
                        <div class="mb-3 text-center">
                            <div>
                                <img src="<?= $static_img ?>ruller.png" />

                                <div class="rule_taille">
                                    <select class="form-select taille_adulte ruller">
                                        <option value="">Faites un choix :</option>
                                        <?php for ($i = 140; $i < 201; $i++) { ?>
                                            <?php if ($i == 140) { ?>
                                                <option value="-<?= $i ?>">-<?= $i ?> cm</option>
                                            <?php } ?>
                                            <?php if ($i == 200) { ?>
                                                <option value="+<?= $i ?>">+<?= $i ?> cm</option>
                                            <?php } ?>
                                            <?php if ($i != 140 && $i != 200) { ?>
                                                <option value="<?= $i ?>"><?= $i ?> cm</option>
                                            <?php } ?>
                                        <?php } ?>
                                    </select>
                                    <a href="" class="btn btn-info btn-accept ms-2 valid_taille">Valider</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 pb-0" id="poids_adulte" <?php if ($_COOKIE['etapes'] == 9) { ?>style="display: block;" <?php } else if ($_COOKIE['etapes'] == 23) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 22) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 21) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 20) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 19) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 18) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 17) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 16) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 15) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 14) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 13) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 13) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 10) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 8) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 7) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 6) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 5) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 4) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 3) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 2) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 1) { ?>style="display: none;" <?php } ?>>
    <div class="container px-5 my-5">
        <div class="row gx-5 text-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="fw-bolder mb-0">
                    <p class="title">Votre silhouette est plutôt ?</p>
                </h2>
                <p class="subtitle">Sachant que Marilyn Monroe, Kate Moss et Adele sont toutes des sex-symbols, il n’y a pas de bonne ou de mauvaise réponse.</p>
            </div>
            <div class="col-lg-6 pt-2 pb-2">
                <div class="row">
                    <div class="col mb-5 h-100">
                        <div class="mb-3">
                            <a href="" class="link_c poids_adulte" data-id="normale">
                                <p class="mb-3">normale</p>
                            </a>
                            <a href="" class="link_c poids_adulte" data-id="sportive">
                                <p class="mb-3">sportive</p>
                            </a>
                            <a href="" class="link_c poids_adulte" data-id="mince">
                                <p class="mb-3">mince</p>
                            </a>
                            <a href="" class="link_c poids_adulte" data-id="quelques kilos en trop">
                                <p class="mb-3">quelques kilos en trop</p>
                            </a>
                            <a href="" class="link_c poids_adulte" data-id="ronde">
                                <p class="mb-3">ronde</p>
                            </a>
                            <a href="" class="link_c poids_adulte" data-id="trapue">
                                <p class="mb-3">trapue</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 pb-0" id="cheveux_adulte" <?php if ($_COOKIE['etapes'] == 10) { ?>style="display: block;" <?php } else if ($_COOKIE['etapes'] == 23) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 22) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 21) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 20) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 19) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 18) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 17) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 16) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 15) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 14) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 13) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 13) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 9) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 8) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 7) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 6) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 5) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 4) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 3) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 2) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 1) { ?>style="display: none;" <?php } ?>>
    <div class="container px-5 my-5">
        <div class="row gx-5 text-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="fw-bolder mb-0">
                    <p class="title">Et votre longueur de cheveux dans tout ça ?</p>
                </h2>
                <p class="subtitle">Nuque dégagée ou chevelure de rêve ? Il est temps de vendre la mèche...</p>
            </div>
            <div class="col-lg-6 pt-2 pb-2">
                <div class="row">
                    <div class="col mb-5 h-100 text-center">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-0"><i class="fas fa-air-freshener"></i></div>
                        <a href="" class="link_c cheveux_adulte" data-id="courts">
                            <p class="mb-3 mt-3">courts</p>
                        </a>
                    </div>

                    <div class="col mb-5 h-100 text-center">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-0"><i class="fas fa-air-freshener"></i></div>
                        <a href="" class="link_c cheveux_adulte" data-id="mi-longs">
                            <p class="mb-3 mt-3">mi-longs</p>
                        </a>
                    </div>

                    <div class="col mb-5 h-100 text-center">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-0"><i class="fas fa-air-freshener"></i></div>
                        <a href="" class="link_c cheveux_adulte" data-id="longs">
                            <p class="mb-3 mt-3">longs</p>
                        </a>
                    </div>

                    <div class="col mb-5 h-100 text-center">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-0"><i class="fas fa-air-freshener"></i></div>
                        <a href="" class="link_c cheveux_adulte" data-id="rasés">
                            <p class="mb-3 mt-3">rasés</p>
                        </a>
                    </div>

                    <div class="col mb-5 h-100 text-center">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-0"><i class="fas fa-air-freshener"></i></div>
                        <a href="" class="link_c parent_envie_choice" data-id="chauve">
                            <p class="mb-3 mt-3">chauve</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 pb-0" id="cheveux__color_adulte" <?php if ($_COOKIE['etapes'] == 11) { ?>style="display: block;" <?php } else if ($_COOKIE['etapes'] == 23) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 22) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 21) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 20) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 19) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 18) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 17) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 16) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 15) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 14) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 13) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 13) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 10) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 9) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 8) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 7) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 6) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 5) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 4) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 3) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 2) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 1) { ?>style="display: none;" <?php } ?>>
    <div class="container px-5 my-5">
        <div class="row gx-5 text-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="fw-bolder mb-0">
                    <p class="title">Côté couleur vous êtes ?</p>
                </h2>
                <p class="subtitle">Inconditionnelle de blond platine, poivre et sel ou noir de jais... Annoncez la couleur !</p>
            </div>
            <div class="col-lg-6 pt-2 pb-2">
                <div class="row">
                    <div class="col mb-5 h-100">
                        <a href="" class="link_c cheveux__color_adulte" data-id="chatains">
                            <p class="mb-3">chatains</p>
                        </a>

                        <a href="" class="link_c cheveux__color_adulte" data-id="bruns">
                            <p class="mb-3 mt-3">bruns</p>
                        </a>

                        <a href="" class="link_c cheveux__color_adulte" data-id="noirs">
                            <p class="mb-3 mt-3">noirs</p>
                        </a>

                        <a href="" class="link_c cheveux__color_adulte" data-id="blonds">
                            <p class="mb-3 mt-3">blonds</p>
                        </a>

                        <a href="" class="link_c cheveux__color_adulte" data-id="poivre et sel">
                            <p class="mb-3 mt-3">poivre et sel</p>
                        </a>

                        <a href="" class="link_c cheveux__color_adulte" data-id="blancs">
                            <p class="mb-3 mt-3">blancs</p>
                        </a>

                        <a href="" class="link_c cheveux__color_adulte" data-id="roux">
                            <p class="mb-3 mt-3">roux</p>
                        </a>

                        <a href="" class="link_c cheveux__color_adulte" data-id="autres">
                            <p class="mb-3 mt-3">autres</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 pb-0" id="origine" <?php if ($_COOKIE['etapes'] == 12) { ?>style="display: block;" <?php } else if ($_COOKIE['etapes'] == 23) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 22) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 21) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 20) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 19) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 18) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 17) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 16) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 15) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 14) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 13) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 13) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 10) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 9) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 8) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 7) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 6) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 5) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 4) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 3) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 2) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 1) { ?>style="display: none;" <?php } ?>>
    <div class="container px-5 my-5">
        <div class="row gx-5 text-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="fw-bolder mb-0">
                    <p class="title">De quelle origine êtes-vous ?</p>
                </h2>
            </div>
            <div class="col-lg-6 pt-2 pb-2">
                <div class="row">
                    <div class="col mb-5 h-100">
                        <a href="" class="link_c origine" data-id="européenne">
                            <p class="mb-3">européenne</p>
                        </a>

                        <a href="" class="link_c origine" data-id="africaine">
                            <p class="mb-3 mt-3">africaine</p>
                        </a>

                        <a href="" class="link_c origine" data-id="arabe">
                            <p class="mb-3 mt-3">arabe</p>
                        </a>

                        <a href="" class="link_c origine" data-id="méditerranéenne">
                            <p class="mb-3 mt-3">méditerranéenne</p>
                        </a>

                        <a href="" class="link_c origine" data-id="métisse5">
                            <p class="mb-3 mt-3">métisse</p>
                        </a>

                        <a href="" class="link_c origine" data-id="latine">
                            <p class="mb-3 mt-3">latine</p>
                        </a>

                        <a href="" class="link_c origine" data-id="asiatique">
                            <p class="mb-3 mt-3">asiatique</p>
                        </a>

                        <a href="" class="link_c origine" data-id="indienne">
                            <p class="mb-3 mt-3">indienne</p>
                        </a>

                        <a href="" class="link_c origine" data-id="autres">
                            <p class="mb-3 mt-3">autres</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 pb-0" id="nationalite" <?php if ($_COOKIE['etapes'] == 13) { ?>style="display: block;" <?php } else if ($_COOKIE['etapes'] == 23) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 22) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 21) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 20) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 19) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 18) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 17) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 16) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 15) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 14) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 13) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 10) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 9) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 8) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 7) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 6) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 5) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 4) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 3) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 2) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 1) { ?>style="display: none;" <?php } ?>>
    <div class="container px-5 my-5">
        <div class="row gx-5 text-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="fw-bolder mb-0">
                    <p class="title">Quelle est votre nationalité ?</p>
                </h2>
            </div>
            <div class="col-lg-6 pt-2 pb-2">
                <div class="row">
                    <div class="col mb-5 h-100">
                        <a href="" class="link_c nationalite" data-id="française">
                            <p class="mb-3">française</p>
                        </a>

                        <a href="" class="link_c nationalite" data-id="belge">
                            <p class="mb-3 mt-3">belge</p>
                        </a>

                        <a href="" class="link_c nationalite" data-id="suisse">
                            <p class="mb-3 mt-3">suisse</p>
                        </a>

                        <p class="mb-3 mt-3 autre_nationalite">
                            <input type="text" class="form-control d-inline-block" name="autre_nationalite" placeholder="Autres nationalités" />
                            <button class="btn btn-info btn-accept ms-2 valid_nationalite" style="display: none;">Valider</button>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 pb-0" id="religion" <?php if ($_COOKIE['etapes'] == 14) { ?>style="display: block;" <?php } else if ($_COOKIE['etapes'] == 23) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 22) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 21) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 20) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 19) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 18) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 17) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 16) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 15) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 13) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 10) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 9) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 8) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 7) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 6) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 5) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 4) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 3) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 2) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 1) { ?>style="display: none;" <?php } ?>>
    <div class="container px-5 my-5">
        <div class="row gx-5 text-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="fw-bolder mb-0">
                    <p class="title">Quelle est votre religion ?</p>
                </h2>
            </div>
            <div class="col-lg-6 pt-2 pb-2">
                <div class="row">
                    <div class="col mb-5 h-100">
                        <a href="" class="link_c religion" data-id="agnostique1">
                            <p class="mb-3">agnostique</p>
                        </a>

                        <a href="" class="link_c religion" data-id="athée">
                            <p class="mb-3">athée</p>
                        </a>

                        <a href="" class="link_c religion" data-id="bouddhiste3">
                            <p class="mb-3 mt-3">bouddhiste</p>
                        </a>

                        <a href="" class="link_c religion" data-id="catholique">
                            <p class="mb-3 mt-3">catholique</p>
                        </a>

                        <a href="" class="link_c religion" data-id="chrétien">
                            <p class="mb-3 mt-3">chrétien</p>
                        </a>

                        <a href="" class="link_c religion" data-id="hindouiste">
                            <p class="mb-3 mt-3">hindouiste</p>
                        </a>

                        <a href="" class="link_c religion" data-id="israélite">
                            <p class="mb-3 mt-3">israélite</p>
                        </a>

                        <a href="" class="link_c religion" data-id="musulman">
                            <p class="mb-3">musulman</p>
                        </a>

                        <a href="" class="link_c religion" data-id="orthodoxe">
                            <p class="mb-3 mt-3">orthodoxe</p>
                        </a>

                        <a href="" class="link_c religion" data-id="protestant">
                            <p class="mb-3 mt-3">protestant</p>
                        </a>

                        <a href="" class="link_c religion" data-id="spirituel">
                            <p class="mb-3 mt-3">spirituel</p>
                        </a>

                        <a href="" class="link_c religion" data-id="autre">
                            <p class="mb-3 mt-3">autre</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 pb-0" id="cigarette" <?php if ($_COOKIE['etapes'] == 15) { ?>style="display: block;" <?php } else if ($_COOKIE['etapes'] == 23) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 22) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 21) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 20) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 19) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 18) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 17) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 16) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 14) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 13) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 10) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 9) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 8) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 7) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 6) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 5) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 4) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 3) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 2) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 1) { ?>style="display: none;" <?php } ?>>
    <div class="container px-5 my-5">
        <div class="row gx-5 text-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="fw-bolder mb-0">
                    <p class="title">Vous fumez ?</p>
                </h2>
                <p class="subtitle">Afin que votre histoire ne parte pas en fumée, préférez l’honnêteté !</p>
            </div>
            <div class="col-lg-6 pt-2 pb-2">
                <div class="row">
                    <div class="col mb-5 h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="fas fa-smoking"></i></div>
                        <a href="" class="link_c cigarette" data-id="fume occasionnellement">
                            <p class="mb-3">fume occasionnellement</p>
                        </a>

                        <a href="" class="link_c cigarette" data-id="fume régulièrement">
                            <p class="mb-3">fume régulièrement</p>
                        </a>

                        <a href="" class="link_c cigarette" data-id="essaye d'arrêter">
                            <p class="mb-3">essaye d'arrêter</p>
                        </a>
                    </div>

                    <div class="col mb-5 h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="fas fa-smoking-ban"></i></div>
                        <a href="" class="link_c cigarette" data-id="ne fume pas">
                            <p class="mb-3">ne fume pas</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 pb-0" id="photo" <?php if ($_COOKIE['etapes'] == 16) { ?>style="display: block;" <?php } else if ($_COOKIE['etapes'] == 23) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 22) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 21) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 20) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 19) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 18) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 17) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 15) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 14) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 13) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 10) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 9) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 8) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 7) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 6) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 5) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 4) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 3) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 2) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 1) { ?>style="display: none;" <?php } ?>>
    <div class="container px-5 my-5">
        <div class="row gx-5 text-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="fw-bolder mb-0">
                    <p class="title">Montrez votre plus beau sourire !</p>
                    <p class="subtitle">Pour profiter de Love and heart, vous devez ajouter votre photo. Ne soyez pas timide et jetez-vous à l’eau !</p>
                </h2>
            </div>
            <div class="col-lg-6 pt-2 pb-2">
                <div class="row">
                    <div class="col mb-2 h-100">
                        <form method="post" enctype="multipart/form-data" id="but_upload">
                            <div class="box">
                                <input type="file" class="box_placeholder" name="photo" id="img_avatar" accept="image/gif, image/jpeg, image/png, image/jpg" />

                                <div class="box_icon"><i class="fas fa-camera-retro"></i></div>

                                <div class="box_title">
                                    Déplacer votre photo ici
                                </div>

                                <div class="box_subtitle">
                                    Taille minimum : 360x360
                                </div>

                                <div id="image-holder"></div>

                                <div id="loader_img" class="lds-dual-ring"></div>

                            </div>

                            <div id="message_validation">Votre photo sera moderée par notre service client en moins de 15 minutes.</div>

                            <div class="resolution_error">La résolution de l'image est trop faible, elle doit être supérieure à : 360x360</div>

                            <div class="cancel_img mt-3">
                                <button id="cancel_img" class="btn btn-info btn-accept">Effacer</button>
                                <button id="valide_img" class="btn btn-info btn-accept">Valider</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 pb-0" id="ideal" <?php if ($_COOKIE['etapes'] == 17) { ?>style="display: block;" <?php } else if ($_COOKIE['etapes'] == 23) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 22) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 21) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 20) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 19) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 18) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 16) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 15) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 14) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 13) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 10) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 9) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 8) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 7) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 6) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 5) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 4) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 3) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 2) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 1) { ?>style="display: none;" <?php } ?>>
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="fw-bolder mb-0">
                    <p class="title">Votre idéal - Son âge</p>
                </h2>
                <p class="subtitle">Quelle tranche d'âge recherchez-vous ?</p>
            </div>
            <div class="col-lg-6 pt-2 pb-2">
                <div class="row ideal">
                    <div class="col mb-5 h-100">
                        <p class="mb-3"><span class="sp_day">De</span> <input type="text" pattern="[0-9]" maxlength="2" class="form-control d-inline-block" name="day" id="ideal_day" value="35"> <span class="sp_day">à</span> <input type="text" class="form-control" name="byday" id="ideal_byday" value="54" pattern="[0-9]" maxlength="2"> <span class="sp_day">ans</span> <button class="btn btn-info btn-ideal ms-2 valid_ideal_age">Valider</button></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 pb-0" id="ideal_status_marital" <?php if ($_COOKIE['etapes'] == 18) { ?>style="display: block;" <?php } else if ($_COOKIE['etapes'] == 23) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 22) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 21) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 20) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 19) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 17) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 16) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 15) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 14) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 13) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 10) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 9) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 8) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 7) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 6) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 5) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 4) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 3) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 2) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 1) { ?>style="display: none;" <?php } ?>>
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="fw-bolder mb-0">
                    <p class="title">Votre idéal :</p>
                </h2>
                <p class="subtitle">Quel est son statut marital ?</p>
            </div>
            <div class="col-lg-6 pt-2 pb-2">
                <div class="row ideal">
                    <div class="col mb-5 h-100">
                        <a href="" class="link_c ideal_status_marital" data-id="célibataire">
                            <p class="mb-3">célibataire</p>
                        </a>

                        <a href="" class="link_c ideal_status_marital" data-id="séparé">
                            <p class="mb-3 mt-3">séparé</p>
                        </a>

                        <a href="" class="link_c ideal_status_marital" data-id="divorcé">
                            <p class="mb-3 mt-3">divorcé</p>
                        </a>

                        <a href="" class="link_c ideal_status_marital" data-id="veuf">
                            <p class="mb-3 mt-3">veuf</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 pb-0" id="ideal_enfant" <?php if ($_COOKIE['etapes'] == 19) { ?>style="display: block;" <?php } else if ($_COOKIE['etapes'] == 23) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 22) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 21) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 20) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 18) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 17) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 16) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 15) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 14) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 13) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 10) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 9) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 8) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 7) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 6) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 5) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 4) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 3) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 2) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 1) { ?>style="display: none;" <?php } ?>>
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="fw-bolder mb-0">
                    <p class="title">Votre idéal :</p>
                </h2>
                <p class="subtitle">Il/Elle veut des enfants ?</p>
            </div>
            <div class="col-lg-6 pt-2 pb-2">
                <div class="row ideal">
                    <div class="col mb-5 h-100">
                        <a href="" class="link_c ideal_enfant" data-id="il veut des enfants">
                            <p class="mb-3">il veut des enfants</p>
                        </a>

                        <a href="" class="link_c ideal_enfant" data-id="il ne veut pas d'enfants">
                            <p class="mb-3 mt-3">il ne veut pas d'enfants</p>
                        </a>

                        <a href="" class="link_c ideal_enfant" data-id="rien n'est décidé">
                            <p class="mb-3 mt-3">rien n'est décidé</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 pb-0" id="ideal_taille" <?php if ($_COOKIE['etapes'] == 20) { ?>style="display: block;" <?php } else if ($_COOKIE['etapes'] == 23) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 22) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 21) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 19) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 18) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 17) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 16) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 15) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 14) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 13) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 10) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 9) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 8) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 7) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 6) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 5) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 4) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 3) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 2) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 1) { ?>style="display: none;" <?php } ?>>
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="fw-bolder mb-0">
                    <p class="title">Votre idéal :</p>
                </h2>
                <p class="subtitle">Quelle est sa taille ?</p>
            </div>
            <div class="col-lg-6 pt-2 pb-2">
                <div class="row">
                    <div class="col mb-5 h-100">
                        <div class="mb-3 text-center">
                            <div>
                                <img src="<?= $static_img ?>ruller.png" />

                                <div class="rule_taille">
                                    <select class="form-select ideal_taille ruller_ideal">
                                        <option value="">Faites un choix :</option>
                                        <?php for ($i = 140; $i < 201; $i++) { ?>
                                            <?php if ($i == 140) { ?>
                                                <option value="-<?= $i ?>">-<?= $i ?> cm</option>
                                            <?php } ?>
                                            <?php if ($i == 200) { ?>
                                                <option value="+<?= $i ?>">+<?= $i ?> cm</option>
                                            <?php } ?>
                                            <?php if ($i != 140 && $i != 200) { ?>
                                                <option value="<?= $i ?>"><?= $i ?> cm</option>
                                            <?php } ?>
                                        <?php } ?>
                                    </select>
                                    <a href="" class="btn btn-info btn-ideal ms-2 valid_ideal_taille">Valider</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 pb-0" id="ideal_poids" <?php if ($_COOKIE['etapes'] == 21) { ?>style="display: block;" <?php } else if ($_COOKIE['etapes'] == 23) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 22) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 21) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 20) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 19) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 18) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 17) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 16) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 15) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 14) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 13) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 10) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 9) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 8) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 7) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 6) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 5) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 4) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 3) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 2) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 1) { ?>style="display: none;" <?php } ?>>
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="fw-bolder mb-0">
                    <p class="title">Votre idéal :</p>
                </h2>
                <p class="subtitle">Sa silhouette est plutôt...</p>
            </div>
            <div class="col-lg-6 pt-2 pb-2">
                <div class="row ideal">
                    <div class="col mb-5 h-100">
                        <a href="" class="link_c ideal_poids" data-id="normale">
                            <p class="mb-3">normale</p>
                        </a>

                        <a href="" class="link_c ideal_poids" data-id="sportive">
                            <p class="mb-3 mt-3">sportive</p>
                        </a>

                        <a href="" class="link_c ideal_poids" data-id="mince">
                            <p class="mb-3 mt-3">mince</p>
                        </a>

                        <a href="" class="link_c ideal_poids" data-id="quelques kilos en trop">
                            <p class="mb-3 mt-3">quelques kilos en trop</p>
                        </a>

                        <a href="" class="link_c ideal_poids" data-id="ronde">
                            <p class="mb-3 mt-3">ronde</p>
                        </a>

                        <a href="" class="link_c ideal_poids" data-id="trapue">
                            <p class="mb-3 mt-3">trapue</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 pb-0" id="ideal_fume" <?php if ($_COOKIE['etapes'] == 22) { ?>style="display: block;" <?php } else if ($_COOKIE['etapes'] == 23) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 21) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 20) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 19) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 18) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 17) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 16) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 15) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 14) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 13) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 10) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 9) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 8) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 7) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 6) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 5) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 4) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 3) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 2) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 1) { ?>style="display: none;" <?php } ?>>
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="fw-bolder mb-0">
                    <p class="title">Votre idéal :</p>
                </h2>
                <p class="subtitle">Il/Elle fume ?</p>
            </div>
            <div class="col-lg-6 pt-2 pb-2">
                <div class="row ideal">
                    <div class="col mb-5 h-100">
                        <a href="" class="link_c ideal_fume" data-id="ne fume pas">
                            <p class="mb-3">ne fume pas</p>
                        </a>

                        <a href="" class="link_c ideal_fume" data-id="fume occasionnellement">
                            <p class="mb-3 mt-3">fume occasionnellement</p>
                        </a>

                        <a href="" class="link_c ideal_fume" data-id="fume régulièrement">
                            <p class="mb-3 mt-3">fume régulièrement</p>
                        </a>

                        <a href="" class="link_c ideal_fume" data-id="essaye d'arrêter">
                            <p class="mb-3 mt-3">essaye d'arrêter</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 pb-0" id="ideal_demarquation" <?php if ($_COOKIE['etapes'] == 23) { ?>style="display: block;" <?php } else if ($_COOKIE['etapes'] == 22) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 21) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 20) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 19) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 18) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 17) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 16) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 15) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 14) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 13) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 10) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 9) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 8) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 7) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 6) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 5) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 4) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 3) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 2) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 1) { ?>style="display: none;" <?php } ?>>
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="fw-bolder mb-0">
                    <p class="title title_demarq">Dites-nous quelques mots sur vous !</p>
                </h2>
                <p class="subtitle">Quelques exemples :</p>

                <div class="suggestion_d">
                    <a href="" class="left_fl"></a>
                    <a href="" class="right_fl"></a>
                    <div class="suggestion">

                        <p>Alain - 35 ans</p>
                        <p>Jeune Homme souriant et généralement en retard cherche une femme bavard, têtu et indécis.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pt-2 pb-2">
                <div class="row ideal">
                    <div class="col mb-5 h-100">
                        <form method="post" class="" id="submit_ideal_demarquation">
                            <p class="demarq_text">Pour vous démarquer, décrivez votre personnalité ou expliquez ce que vous attendez !</p>
                            <textarea class="form-control demarq_textarea" name="ideal_demarquation_text" placeholder="Écrivez ici"></textarea>
                            <button class="btn btn-info btn-ideal valid_ideal_age">Valider</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>