<?php $result_favorites = selectDB('*', 'favorites', 'user_id = "' . $_SESSION['user_id'] . '" ORDER BY id DESC', $db, '*');  ?>

<div class="head">

    <img class="header_logo" src="<?= $static_img ?>header_logo.webp" />

    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-auto text-center pt-4 pb_mobile">

                <a href="/coup-de-coeur" class="btn btn-soeur btn-soeur-profil-heart mt-4 me-4 ms-4 mb-3"><i class="fas fa-heart me-2" style="color: red;"></i> Mes coup de coeur (<?= count($result_favorites) ?>)</a>
                <a href="/coup-de-coeur" class="btn btn-soeur btn-soeur-profil-msg mt-4 me-4 ms-4 mb-3"><i class="far fa-comment-dots me-2" style="color: rgb(43, 180, 18);" aria-hidden="true"></i> Mes messages (<?= count($result_favorites) ?>)</a>

            </div>
        </div>
    </div>

</div>

<div class="container">
    <div class="row g-4 my-5 row-cols-1 row-cols-lg-3 show_mobile">
        <?php include_once('modules/profil-avatar.php'); ?>

        <div class="col-lg-8">
            <div class="profil_gestion">
                <h3><i class="fas fa-running me-2"></i>Gérer ma personnalité</h3>

                <div class="alert alert-danger" id="alert_danger" style="display: none;" role="alert">
                    <div class="message_danger"></div>
                </div>

                <div class="alert alert-success" id="alert_success" style="display: none;" role="alert">
                    <div class="message_success"></div>
                </div>

                <form id="edit_personnalite" method="POST">
                    <div class="col-lg-5 d-inline-block me-4 ms-4">
                        <div class="text-start width-100">
                            <label class="edit-label" for="email-input">Je recherche</label>
                            <select name="recherche" class="form-select edit-select" style="text-transform: capitalize;">
                                <?php foreach ($result_recherche as $data) { ?>
                                    <option value="<?= $data['id']; ?>" <?= ($data['id'] == $recherche->get_user()) ? "selected" : ""; ?>><?= $data['value']; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="text-start width-100">
                            <label class="edit-label" for="partage-input">Êtes-vous prête à vous engager ?</label>
                            <select name="partage" class="form-select edit-select" style="text-transform: inherit;">
                                <option value="Une vraie histoire" <?= ($partage->get_user() == "Une vraie histoire") ? "selected" : "" ?>>Une vraie histoire</option>
                                <option value="De nouvelles rencontres" <?= ($partage->get_user() == "De nouvelles rencontres") ? "selected" : "" ?>>De nouvelles rencontres</option>
                                <option value="Je ne sais pas encore" <?= ($partage->get_user() == "Je ne sais pas encore") ? "selected" : "" ?>>Je ne sais pas encore</option>
                            </select>
                        </div>

                        <div class="text-start width-100">
                            <label class="edit-label" for="status_marital-input">Quel est votre statut marital ?</label>
                            <select name="status_marital" class="form-select edit-select" style="text-transform: inherit;">
                                <option value="célibataire" <?= ($status_marital->get_user() == "célibataire") ? "selected" : "" ?>>Célibataire</option>
                                <option value="séparée" <?= ($status_marital->get_user() == "séparée") ? "selected" : "" ?>>Séparée</option>
                                <option value="veuf" <?= ($status_marital->get_user() == "veuf") ? "selected" : "" ?>>veuf</option>
                                <option value="veuve" <?= ($status_marital->get_user() == "veuve") ? "selected" : "" ?>>veuve</option>
                            </select>
                        </div>

                        <div class="text-start width-100">
                            <label class="edit-label" for="naissance-input">Êtes-vous parent ?</label>
                            <select name="naissance" class="form-select edit-select" style="text-transform: inherit;">
                                <option value="J'en ai" <?= ($naissance->get_user() == "J'en ai") ? "selected" : "" ?>>J'en ai</option>
                                <option value="Je n'en ai pas" <?= ($naissance->get_user() == "Je n'en ai pas") ? "selected" : "" ?>>Je n'en ai pas</option>
                            </select>
                        </div>

                        <div class="text-start width-100">
                            <label class="edit-label" for="parent_envie-input">Envie d’enfants ?</label>
                            <select name="parent_envie" class="form-select edit-select" style="text-transform: inherit;">
                                <option value="J'en veux" <?= ($parent_envie->get_user() == "J'en veux") ? "selected" : "" ?>>J'en veux</option>
                                <option value="Je n'en veux pas" <?= ($parent_envie->get_user() == "Je n'en veux pas") ? "selected" : "" ?>>Je n'en veux pas</option>
                            </select>
                        </div>

                        <div class="text-start width-100">
                            <label class="edit-label" for="niveau_etude-input">Quel est votre niveau d'études ?</label>
                            <select name="niveau_etude" class="form-select edit-select" style="text-transform: inherit;">
                                <option value="niveau lycée et inférieur" <?= ($niveau_etude->get_user() == "niveau lycée et inférieur") ? "selected" : "" ?>>Niveau lycée et inférieur</option>
                                <option value="bac" <?= ($niveau_etude->get_user() == "bac") ? "selected" : "" ?>>Bac</option>
                                <option value="bac +2" <?= ($niveau_etude->get_user() == "bac +2") ? "selected" : "" ?>>Bac +2</option>
                                <option value="bac +3" <?= ($niveau_etude->get_user() == "bac +3") ? "selected" : "" ?>>Bac +3</option>
                                <option value="bac +4" <?= ($niveau_etude->get_user() == "bac +4") ? "selected" : "" ?>>Bac +4</option>
                                <option value="Bac +5 et plus" <?= ($niveau_etude->get_user() == "Bac +5 et plus") ? "selected" : "" ?>>Bac +5 et plus</option>
                            </select>
                        </div>

                        <div class="text-start width-100">
                            <label class="edit-label" for="religion-input">Quelle est votre religion ?</label>
                            <select name="religion" class="form-select edit-select" style="text-transform: inherit;">
                                <option value="agnostique" <?= ($religion->get_user() == "agnostique") ? "selected" : "" ?>>Agnostique</option>
                                <option value="athée" <?= ($religion->get_user() == "athée") ? "selected" : "" ?>>Athée</option>
                                <option value="bouddhiste" <?= ($religion->get_user() == "bouddhiste") ? "selected" : "" ?>>Bouddhiste</option>
                                <option value="catholique" <?= ($religion->get_user() == "catholique") ? "selected" : "" ?>>Catholique</option>
                                <option value="chrétien" <?= ($religion->get_user() == "chrétien") ? "selected" : "" ?>>Chrétien</option>
                                <option value="hindouiste" <?= ($religion->get_user() == "hindouiste") ? "selected" : "" ?>>Hindouiste</option>
                                <option value="israélite" <?= ($religion->get_user() == "israélite") ? "selected" : "" ?>>Israélite</option>
                                <option value="musulman" <?= ($religion->get_user() == "musulman") ? "selected" : "" ?>>Musulman</option>
                                <option value="orthodoxe" <?= ($religion->get_user() == "orthodoxe") ? "selected" : "" ?>>Orthodoxe</option>
                                <option value="protestant" <?= ($religion->get_user() == "protestant") ? "selected" : "" ?>>Protestant</option>
                                <option value="spirituel" <?= ($religion->get_user() == "spirituel") ? "selected" : "" ?>>Spirituel</option>
                                <option value="autre" <?= ($religion->get_user() == "autre") ? "selected" : "" ?>>Autre</option>
                            </select>
                        </div>

                    </div>

                    <div class="col-lg-5 d-inline-block me-4 ms-4">
                        <div class="text-start width-100">
                            <label class="edit-label" for="taille_adulte-input">Quelle taille faites-vous ?</label>
                            <select name="taille_adulte" class="form-select edit-select" style="text-transform: inherit;">
                                <?php for ($i = 140; $i < 201; $i++) { ?>
                                    <?php if ($i == 140) { ?>
                                        <option value="-<?= $i ?>" <?= ($taille_adulte->get_user() == "140") ? "selected" : "" ?>>-<?= $i ?> cm</option>
                                    <?php } ?>
                                    <?php if ($i == 200) { ?>
                                        <option value="+<?= $i ?>" <?= ($taille_adulte->get_user() == "200") ? "selected" : "" ?>>+<?= $i ?> cm</option>
                                    <?php } ?>
                                    <?php if ($i != 140 && $i != 200) { ?>
                                        <option value="<?= $i ?>" <?= ($taille_adulte->get_user() != "140" && $taille_adulte->get_user() != "200" && $taille_adulte->get_user() == $i) ? "selected" : "" ?>><?= $i ?> cm</option>
                                    <?php } ?>
                                <?php } ?>
                            </select>

                            <div class="text-start width-100">
                                <label class="edit-label" for="poids_adulte-input">Votre silhouette est plutôt ?</label>
                                <select name="poids_adulte" class="form-select edit-select" style="text-transform: inherit;">
                                    <option value="normale" <?= ($poids_adulte->get_user() == "normale") ? "selected" : "" ?>>Normale</option>
                                    <option value="sportive" <?= ($poids_adulte->get_user() == "sportive") ? "selected" : "" ?>>Sportive</option>
                                    <option value="mince" <?= ($poids_adulte->get_user() == "mince") ? "selected" : "" ?>>Mince</option>
                                    <option value="quelques kilos en trop" <?= ($poids_adulte->get_user() == "quelques kilos en trop") ? "selected" : "" ?>>Quelques kilos en trop</option>
                                    <option value="<?= ($je_suis->get_user() == "1") ? "ronde" : "rond" ?>" <?= ($poids_adulte->get_user() == "ronde" && $je_suis->get_user() == "1") ? "selected" : "" ?> <?= ($poids_adulte->get_user() == "rond" && $je_suis->get_user() == "2") ? "selected" : "" ?>><?= ($je_suis->get_user() == "1") ? "Ronde" : "Rond" ?></option>
                                    <option value="trapue" <?= ($poids_adulte->get_user() == "sportive") ? "selected" : "" ?>>Trapue</option>
                                </select>
                            </div>

                            <div class="text-start width-100">
                                <label class="edit-label" for="cheveux_adulte-input">Et votre longueur de cheveux ?</label>
                                <select name="cheveux_adulte" class="form-select edit-select" style="text-transform: inherit;">
                                    <option value="courts" <?= ($cheveux_adulte->get_user() == "courts") ? "selected" : "" ?>>Courts</option>
                                    <option value="mi-longs" <?= ($cheveux_adulte->get_user() == "mi-longs") ? "selected" : "" ?>>Mi-longs</option>
                                    <option value="longs" <?= ($cheveux_adulte->get_user() == "longs") ? "selected" : "" ?>>Longs</option>
                                    <option value="rasés" <?= ($cheveux_adulte->get_user() == "rasés") ? "selected" : "" ?>>Rasés</option>
                                    <option value="chauve" <?= ($cheveux_adulte->get_user() == "chauve") ? "selected" : "" ?>>Chauve</option>
                                </select>
                            </div>

                            <div class="text-start width-100">
                                <label class="edit-label" for="cheveux_color_adulte-input">Côté couleur vous êtes ?</label>
                                <select name="cheveux_color_adulte" class="form-select edit-select" style="text-transform: inherit;">
                                    <option value="chatains" <?= ($cheveux_color_adulte->get_user() == "chatains") ? "selected" : "" ?>>Chatains</option>
                                    <option value="bruns" <?= ($cheveux_color_adulte->get_user() == "bruns") ? "selected" : "" ?>>Bruns</option>
                                    <option value="noirs" <?= ($cheveux_color_adulte->get_user() == "noirs") ? "selected" : "" ?>>Noirs</option>
                                    <option value="blonds" <?= ($cheveux_color_adulte->get_user() == "blonds") ? "selected" : "" ?>>Blonds</option>
                                    <option value="poivre et sel" <?= ($cheveux_color_adulte->get_user() == "poivre et sel") ? "selected" : "" ?>>Poivre et sel</option>
                                    <option value="blancs" <?= ($cheveux_color_adulte->get_user() == "blancs") ? "selected" : "" ?>>Blancs</option>
                                    <option value="roux" <?= ($cheveux_color_adulte->get_user() == "roux") ? "selected" : "" ?>>Roux</option>
                                    <option value="autres" <?= ($cheveux_color_adulte->get_user() == "autres") ? "selected" : "" ?>>Autres</option>
                                </select>
                            </div>

                            <div class="text-start width-100">
                                <label class="edit-label" for="origine-input">De quelle origine êtes-vous ?</label>
                                <select name="origine" class="form-select edit-select" style="text-transform: inherit;">
                                    <option value="européenne" <?= ($origine->get_user() == "européenne") ? "selected" : "" ?>>Européenne</option>
                                    <option value="africaine" <?= ($origine->get_user() == "africaine") ? "selected" : "" ?>>Africaine</option>
                                    <option value="arabe" <?= ($origine->get_user() == "arabe") ? "selected" : "" ?>>Arabe</option>
                                    <option value="méditerranéenne" <?= ($origine->get_user() == "méditerranéenne") ? "selected" : "" ?>>Méditerranéenne</option>
                                    <option value="métisse" <?= ($origine->get_user() == "métisse") ? "selected" : "" ?>>Métisse</option>
                                    <option value="latine" <?= ($origine->get_user() == "latine") ? "selected" : "" ?>>Latine</option>
                                    <option value="asiatique" <?= ($origine->get_user() == "asiatique") ? "selected" : "" ?>>Asiatique</option>
                                    <option value="indienne" <?= ($origine->get_user() == "indienne") ? "selected" : "" ?>>Indienne</option>
                                    <option value="autre" <?= ($origine->get_user() == "autre") ? "selected" : "" ?>>Autre</option>
                                </select>
                            </div>

                            <div class="text-start width-100">
                                <label class="edit-label" for="nationalite-input">Quelle est votre nationalité ?</label>
                                <select name="nationalite" class="form-select edit-select" style="text-transform: inherit;">
                                    <option value="française" <?= ($nationalite->get_user() == "française") ? "selected" : "" ?>>Française</option>
                                    <option value="belge" <?= ($nationalite->get_user() == "belge") ? "selected" : "" ?>>Belge</option>
                                    <option value="suisse" <?= ($nationalite->get_user() == "suisse") ? "selected" : "" ?>>Suisse</option>
                                    <option value="<?= ($je_suis->get_user() == "1") ? "américaine" : "américain" ?>" <?= ($nationalite->get_user() == "américaine" && $je_suis->get_user() == "1") ? "selected" : "" ?> <?= ($nationalite->get_user() == "américain" && $je_suis->get_user() == "2") ? "selected" : "" ?>><?= ($je_suis->get_user() == "1") ? "Américaine" : "Américain" ?></option>
                                    <option value="autres" <?= ($nationalite->get_user() == "autres") ? "selected" : "" ?>>Autres</option>
                                </select>
                            </div>

                            <div class="text-start width-100">
                                <label class="edit-label" for="cigarette-input">Vous fumez ?</label>
                                <select name="cigarette" class="form-select edit-select" style="text-transform: inherit;">
                                    <option value="fume occasionnellement" <?= ($cigarette->get_user() == "fume occasionnellement") ? "selected" : "" ?>>Fume occasionnellement</option>
                                    <option value="fume régulièrement" <?= ($cigarette->get_user() == "fume régulièrement") ? "selected" : "" ?>>Fume régulièrement</option>
                                    <option value="essaye d'arrêter" <?= ($cigarette->get_user() == "essaye d'arrêter") ? "selected" : "" ?>>Essaye d'arrêter</option>
                                    <option value="ne fume pas" <?= ($cigarette->get_user() == "ne fume pas") ? "selected" : "" ?>>Ne fume pas</option>
                                </select>
                            </div>

                        </div>
                    </div>

                    <div class="text-center m-auto box-submit">
                        <button class="btn btn-success btn-navbar btn-edit">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>