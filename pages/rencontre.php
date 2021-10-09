<div class="head">

    <img class="header_logo" src="<?= $static_img ?>header_logo.webp" />

</div>

<div class="container" id="profil">
    <div class="row">
        <div class="m-auto mt-5 col-lg-10 text-center">
            <h1>Trouvez l'amour, c'est par ici et c'est simple...</h1>
        </div>
    </div>
</div>

<div class="container mt-3 mb-3">
    <div class="row">

        <?php if ($premium->get_user() != 0) { ?>
            <div class="col-lg-4 mt-3 mb-3 ps-4 pe-4">

                <h5 class="mt-4 mb-4"><span style="text-transform: uppercase;font-weight: 600;"><i class="fab fa-searchengin me-2" style="color: #c741c9;"></i>Affiner votre recherche : </span></h5>

                <hr />

                <form id="affine_user" method="POST">

                    <label for="age" class="form-label">Son age <span class="change_age">18</span> an(s) :</label>
                    <input type="range" class="form-range" min="18" max="100" step="1" value="18" id="age" name="age">

                    <div class="separator"></div>

                    <label>Sa taille <span class="change_taille">140</span> cm :</label>
                    <input type="range" class="form-range" min="140" max="220" step="1" value="140" id="taille" name="taille">

                    <div class="separator"></div>

                    <label for="ideal_poids" class="form-label">Sa silhouette :</label>
                    <select name="ideal_poids" class="form-select edit-select" style="text-transform: inherit;">
                        <option value="" selected disabled>Faites un choix</option>
                        <option value="" disabled>--------------</option>
                        <option value="normale">Normale</option>
                        <option value="sportive">Sportive</option>
                        <option value="mince">Mince</option>
                        <option value="quelques kilos en trop">Quelques kilos en trop</option>
                        <option value="Ronde">Ronde</option>
                        <option value="Rond">Rond</option>
                        <option value="trapue">Trapue</option>
                    </select>

                    <hr />

                    <label for="recherche" class="form-label">Je recherche :</label>
                    <select name="recherche" class="form-select edit-select" style="text-transform: capitalize;">
                        <option value="" selected disabled>Faites un choix</option>
                        <option value="" disabled>--------------</option>
                        <?php foreach ($result_recherche as $data) { ?>
                            <option value="<?= $data['id']; ?>" style="text-transform:capitalize;"><?= $data['value']; ?></option>
                        <?php } ?>
                    </select>

                    <div class="separator"></div>

                    <label for="ideal_status_marital" class="form-label">Sont statut marital :</label>
                    <select name="ideal_status_marital" class="form-select edit-select" style="text-transform: inherit;">
                        <option value="" selected disabled>Faites un choix</option>
                        <option value="" disabled>--------------</option>
                        <option value="celibataire">Célibataire</option>
                        <option value="separe">Séparé</option>
                        <option value="divorce">Divorcé</option>
                        <option value="veuf">Veuf</option>
                        <option value="veuve">Veuve</option>
                    </select>

                    <div class="separator"></div>

                    <label for="ideal_enfant" class="form-label">Il/Elle veut des enfants :</label>
                    <select name="ideal_enfant" class="form-select edit-select" style="text-transform: inherit;">
                        <option value="" selected disabled>Faites un choix</option>
                        <option value="" disabled>--------------</option>
                        <option value="oui">Veut des enfants</option>
                        <option value="non">Ne veut pas d'enfants</option>
                        <option value="nsp">Rien n'est décidé</option>
                    </select>

                    <div class="separator"></div>

                    <label for="ideal_fume" class="form-label">Il/Elle fume :</label>
                    <select name="ideal_fume" class="form-select edit-select" style="text-transform: inherit;">
                        <option value="" selected disabled>Faites un choix</option>
                        <option value="" disabled>--------------</option>
                        <option value="fume-occasionnellement">Fume occasionnellement</option>
                        <option value="fume-regulierement">Fume régulièrement</option>
                        <option value="essaye-darreter">Essaye d'arrêter</option>
                        <option value="ne-fume-pas">Ne fume pas</option>
                    </select>

                    <div class="separator"></div>

                    <label for="ideal_loisirs" class="form-label">Les loisirs :</label>
                    <select name="ideal_loisirs" class="form-select edit-select" style="text-transform: inherit;">
                        <option value="" selected disabled>Faites un choix</option>
                        <option value="" disabled>--------------</option>
                        <option value="aller-au-cinema-au-theatre-a-des-concerts">Aller au cinéma, au théâtre, à des concerts</option>
                        <option value="pratiquer-la-speleologie">Pratiquer la spéléologie</option>
                        <option value="participer-a-la-renovation-d-une-maison">Participer à la rénovation d'une maison</option>
                        <option value="aider-un-enfant-a-faire-ses-devoirs">Aider un enfant à faire ses devoirs</option>
                        <option value="pratiquer-un-sport-regulierement">Pratiquer un sport régulièrement</option>
                        <option value="jouer-aux-echecs-aux-dames-a des-jeux-de-strategie">Jouer aux échecs, aux dames, à des jeux de stratégie</option>
                        <option value="construire-des-maquettes">Construire des maquettes</option>
                        <option value="faire-de-la-poterie-des-bijoux-des-objets-decoratifs">Faire de la poterie, des bijoux, des objets décoratifs</option>
                        <option value="etre-secouriste-pompier-benevole">Etre secouriste, pompier bénévole</option>
                        <option value="aller-en-montagne-faire-de-lescalade">Aller en montagne, faire de l'escalade</option>
                        <option value="danser">Danser</option>
                        <option value="jardiner">Jardiner</option>
                        <option value="surfer-sur-le-web">Surfer sur le web</option>
                        <option value="faire du skate-du-roller-du-VTT">Faire du skate, du roller, du VTT</option>
                        <option value="jouer-aux-jeux-video">Jouer aux jeux vidéo</option>
                        <option value="balade-en-foret">Balade en forêt</option>
                    </select>

                    <hr>

                    <div class="text-end m-auto box-submit">
                        <button class="btn btn-success btn-navbar btn-edit">Rechercher...</button>
                    </div>

                </form>

            </div>
        <?php } ?>

        <div class="mt-3 mb-3 ps-4 pe-4 search <?php if ($premium->get_user() == 0) { ?>col-lg-12 error_premium_d<?php } else { ?>col-lg-8<?php } ?>">

            <h5 class="<?php if ($premium->get_user() == 0) { ?>text-center<?php } else { ?>text-start<?php } ?> mt-4 mb-4"><i class="fas fa-bolt me-2" style="color: #6ed0e6;"></i> <span style="text-transform: uppercase;font-weight: 600;">Des milliers de profils, vous attendent...</span></h5>

            <hr />

            <?php if ($premium->get_user() != 0) { ?>

                <div class="search_profil">

                    <!-- Loader -->
                    <div class="loader" style="display: none;">
                        <div class="heart"></div>
                        <div class="heart heart2"></div>
                        <div class="heart heart3 pinkHeart"></div>
                        <div class="heart heart4 fushiaHeart"></div>
                        <div class="heart hear5 pinkHeart"></div>
                    </div>

                </div>

            <?php } else { ?>

                <div class="error_premium">
                    <img src="<?= $static_img ?>shopping-heart.png" />
                    <h4 class="mb-4 mt-4">Désolé, ici, c'est réserver aux abonnés...</h4>
                    <p class="mt-4 mb-4">Envie de rencontrer des célibataires prêts à s'engager, ou juste discuter...</p>
                    <p class="mt-4 mb-4">Merci de commander un abonnement, en cliquant ci-dessous</p>
                    <a class="btn btn-navbar btn-success" href="/payment-renewal">S'abonner maintenant</a>
                </div>

            <?php } ?>
        </div>
    </div>
</div>