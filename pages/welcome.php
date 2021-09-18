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

    <section class="py-5" id="accept">
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

<section class="py-5" id="bienvenue" <?php if ($_COOKIE['etapes'] == 3) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 10) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 9) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 8) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 7) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 6) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 5) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 4) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 2) { ?>style="display: block;" <?php } else if ($_COOKIE['etapes'] == 1) { ?>style="display: none;" <?php } ?>>
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

<section class="py-5" id="partage" <?php if ($_COOKIE['etapes'] == 3) { ?>style="display: block;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 10) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 9) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 8) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 7) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 6) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 5) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 4) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 2) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 1) { ?>style="display: none;" <?php } ?>>
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
                    <div class="col mb-5 h-100">
                        <a href="" class="link_c relation_choice" data-id="1">
                            <p class="mb-3 mt-2">Une vraie histoire</p>
                        </a>
                        <a href="" class="link_c relation_choice" data-id="2">
                            <p class="mb-3">De nouvelles rencontres</p>
                        </a>
                        <a href="" class="link_c relation_choice" data-id="3">
                            <p class="mb-0">Je ne sais pas encore</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5" id="status_marital" <?php if ($_COOKIE['etapes'] == 4) { ?>style="display: block;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 10) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 9) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 8) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 7) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 6) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 5) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 3) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 2) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 1) { ?>style="display: none;" <?php } ?>>
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="fw-bolder mb-0">
                    <p class="title">Quel est votre statut marital ?</p>
                </h2>
                <p class="subtitle">Votre bio amoureuse pourrait en intéresser plus d’un. Partagez-la !</p>
            </div>
            <div class="col-lg-6">
                <div class="row gx-5 row-cols-1 row-cols-md-2">
                    <div class="col mb-5 h-100">
                        <a href="" class="link_c status_marital_choice" data-id="1">
                            <p class="mb-3 mt-2">célibataire</p>
                        </a>
                        <a href="" class="link_c status_marital_choice" data-id="2">
                            <p class="mb-3">séparée</p>
                        </a>
                        <a href="" class="link_c status_marital_choice" data-id="3">
                            <p class="mb-0">veuve</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5" id="parent" <?php if ($_COOKIE['etapes'] == 5) { ?>style="display: block;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 10) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 9) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 8) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 7) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 6) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 4) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 3) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 2) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 1) { ?>style="display: none;" <?php } ?>>
    <div class="container px-5 my-5">
        <div class="row gx-5">
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
                        <a href="" class="link_c parent_choice" data-id="1">
                            <p class="mb-3 mt-3">J'en ai</p>
                        </a>
                    </div>
                    <div class="col mb-5 h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-0"><i class="fas fa-male"></i></div>
                        <a href="" class="link_c parent_choice" data-id="2">
                            <p class="mb-3 mt-3">Je n'en ai pas</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5" id="parent_envie" <?php if ($_COOKIE['etapes'] == 6) { ?>style="display: block;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 10) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 9) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 8) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 7) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 5) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 4) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 3) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 2) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 1) { ?>style="display: none;" <?php } ?>>
    <div class="container px-5 my-5">
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
                        <a href="" class="link_c parent_envie_choice" data-id="1">
                            <p class="mb-3 mt-3">J'en veux</p>
                        </a>
                    </div>
                    <div class="col mb-5 h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-0"><i class="fas fa-times"></i></div>
                        <a href="" class="link_c parent_envie_choice" data-id="2">
                            <p class="mb-3 mt-3">Je n'en veux pas</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5" id="niveau_etude" <?php if ($_COOKIE['etapes'] == 7) { ?>style="display: block;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 10) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 9) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 8) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 6) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 5) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 4) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 3) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 2) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 1) { ?>style="display: none;" <?php } ?>>
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="fw-bolder mb-0">
                    <p class="title">Quel est votre niveau d'études ?</p>
                </h2>
                <p class="subtitle">Brevet des collèges, BEP, Bac, +2, +4, +8 ? C’est le moment de clamer votre amour des études (ou pas...) !</p>
            </div>
            <div class="col-lg-6 pt-2 pb-2">
                <div class="row">
                    <div class="col mb-5 h-100">
                        <a href="" class="link_c niveau_etude" data-id="1">
                            <p class="mb-3">niveau lycée et inférieur</p>
                        </a>

                        <a href="" class="link_c niveau_etude" data-id="2">
                            <p class="mb-3 mt-3">bac</p>
                        </a>

                        <a href="" class="link_c niveau_etude" data-id="3">
                            <p class="mb-3 mt-3">bac +2</p>
                        </a>

                        <a href="" class="link_c niveau_etude" data-id="4">
                            <p class="mb-3 mt-3">bac +3</p>
                        </a>

                        <a href="" class="link_c niveau_etude" data-id="5">
                            <p class="mb-3 mt-3">bac +4</p>
                        </a>

                        <a href="" class="link_c niveau_etude" data-id="6">
                            <p class="mb-3 mt-3">bac +5 et plus</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5" id="taille_adulte" <?php if ($_COOKIE['etapes'] == 8) { ?>style="display: block;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 10) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 9) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 7) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 6) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 5) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 4) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 3) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 2) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 1) { ?>style="display: none;" <?php } ?>>
    <div class="container px-5 my-5">
        <div class="row gx-5">
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

<section class="py-5" id="poids_adulte" <?php if ($_COOKIE['etapes'] == 9) { ?>style="display: block;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 10) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 8) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 7) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 6) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 5) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 4) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 3) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 2) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 1) { ?>style="display: none;" <?php } ?>>
    <div class="container px-5 my-5">
        <div class="row gx-5">
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
                            <a href="" class="link_c poids_adulte" data-id="1">
                                <p class="mb-3">normale</p>
                            </a>
                            <a href="" class="link_c poids_adulte" data-id="2">
                                <p class="mb-3">sportive</p>
                            </a>
                            <a href="" class="link_c poids_adulte" data-id="3">
                                <p class="mb-3">mince</p>
                            </a>
                            <a href="" class="link_c poids_adulte" data-id="4">
                                <p class="mb-3">quelques kilos en trop</p>
                            </a>
                            <a href="" class="link_c poids_adulte" data-id="5">
                                <p class="mb-3">ronde</p>
                            </a>
                            <a href="" class="link_c poids_adulte" data-id="6">
                                <p class="mb-3">trapue</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5" id="cheveux_adulte" <?php if ($_COOKIE['etapes'] == 10) { ?>style="display: block;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 9) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 8) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 7) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 6) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 5) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 4) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 3) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 2) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 1) { ?>style="display: none;" <?php } ?>>
    <div class="container px-5 my-5">
        <div class="row gx-5">
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
                        <a href="" class="link_c cheveux_adulte" data-id="1">
                            <p class="mb-3 mt-3">courts</p>
                        </a>
                    </div>

                    <div class="col mb-5 h-100 text-center">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-0"><i class="fas fa-air-freshener"></i></div>
                        <a href="" class="link_c cheveux_adulte" data-id="2">
                            <p class="mb-3 mt-3">mi-longs</p>
                        </a>
                    </div>

                    <div class="col mb-5 h-100 text-center">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-0"><i class="fas fa-air-freshener"></i></div>
                        <a href="" class="link_c cheveux_adulte" data-id="3">
                            <p class="mb-3 mt-3">longs</p>
                        </a>
                    </div>

                    <div class="col mb-5 h-100 text-center">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-0"><i class="fas fa-air-freshener"></i></div>
                        <a href="" class="link_c cheveux_adulte" data-id="4">
                            <p class="mb-3 mt-3">rasés</p>
                        </a>
                    </div>

                    <div class="col mb-5 h-100 text-center">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-0"><i class="fas fa-air-freshener"></i></div>
                        <a href="" class="link_c parent_envie_choice" data-id="5">
                            <p class="mb-3 mt-3">chauve</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5" id="cheveux__color_adulte" <?php if ($_COOKIE['etapes'] == 11) { ?>style="display: block;" <?php } else if ($_COOKIE['etapes'] == 12) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 10) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 9) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 8) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 7) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 6) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 5) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 4) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 3) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 2) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 1) { ?>style="display: none;" <?php } ?>>
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="fw-bolder mb-0">
                    <p class="title">Côté couleur vous êtes ?</p>
                </h2>
                <p class="subtitle">Inconditionnelle de blond platine, poivre et sel ou noir de jais... Annoncez la couleur !</p>
            </div>
            <div class="col-lg-6 pt-2 pb-2">
                <div class="row">
                    <div class="col mb-5 h-100">
                        <a href="" class="link_c cheveux__color_adulte" data-id="1">
                            <p class="mb-3">chatains</p>
                        </a>

                        <a href="" class="link_c cheveux__color_adulte" data-id="2">
                            <p class="mb-3 mt-3">bruns</p>
                        </a>

                        <a href="" class="link_c cheveux__color_adulte" data-id="3">
                            <p class="mb-3 mt-3">noirs</p>
                        </a>

                        <a href="" class="link_c cheveux__color_adulte" data-id="4">
                            <p class="mb-3 mt-3">blonds</p>
                        </a>

                        <a href="" class="link_c cheveux__color_adulte" data-id="5">
                            <p class="mb-3 mt-3">poivre et sel</p>
                        </a>

                        <a href="" class="link_c cheveux__color_adulte" data-id="6">
                            <p class="mb-3 mt-3">blancs</p>
                        </a>

                        <a href="" class="link_c cheveux__color_adulte" data-id="7">
                            <p class="mb-3 mt-3">roux</p>
                        </a>

                        <a href="" class="link_c cheveux__color_adulte" data-id="8">
                            <p class="mb-3 mt-3">autres</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5" id="origine" <?php if ($_COOKIE['etapes'] == 12) { ?>style="display: block;" <?php } else if ($_COOKIE['etapes'] == 11) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 10) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 9) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 8) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 7) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 6) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 5) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 4) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 3) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 2) { ?>style="display: none;" <?php } else if ($_COOKIE['etapes'] == 1) { ?>style="display: none;" <?php } ?>>
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="fw-bolder mb-0">
                    <p class="title">De quelle origine êtes-vous ?</p>
                </h2>
            </div>
            <div class="col-lg-6 pt-2 pb-2">
                <div class="row">
                    <div class="col mb-5 h-100">
                        <a href="" class="link_c origine" data-id="1">
                            <p class="mb-3">européenne</p>
                        </a>

                        <a href="" class="link_c origine" data-id="2">
                            <p class="mb-3 mt-3">africaine</p>
                        </a>

                        <a href="" class="link_c origine" data-id="3">
                            <p class="mb-3 mt-3">arabe</p>
                        </a>

                        <a href="" class="link_c origine" data-id="4">
                            <p class="mb-3 mt-3">méditerranéenne</p>
                        </a>

                        <a href="" class="link_c origine" data-id="5">
                            <p class="mb-3 mt-3">métisse</p>
                        </a>

                        <a href="" class="link_c origine" data-id="6">
                            <p class="mb-3 mt-3">latine</p>
                        </a>

                        <a href="" class="link_c origine" data-id="7">
                            <p class="mb-3 mt-3">asiatique</p>
                        </a>

                        <a href="" class="link_c origine" data-id="8">
                            <p class="mb-3 mt-3">indienne</p>
                        </a>

                        <a href="" class="link_c origine" data-id="9">
                            <p class="mb-3 mt-3">autres</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>