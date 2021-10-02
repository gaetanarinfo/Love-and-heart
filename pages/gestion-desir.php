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
                <h3><i class="fas fa-people-arrows me-2"></i>Gérer mon désir</h3>

                <div class="alert alert-danger" id="alert_danger" style="display: none;" role="alert">
                    <div class="message_danger"></div>
                </div>

                <div class="alert alert-success" id="alert_success" style="display: none;" role="alert">
                    <div class="message_success"></div>
                </div>

                <form id="edit_desir" method="POST">
                    <div class="col-lg-5 d-inline-block me-4 ms-4">
                        <div class="text-start width-100">
                            <label class="edit-label width-100" for="email-input">Quelle est son âge</label>
                            <div class="d-inline-block">
                                <input class="edit-input d-inline-block me-2" style="width: 55px;" type="number" maxlength="2" min="1" autocomplete="on" name="ideal_age_day" value="<?= $ideal_age_day->get_user(); ?>">
                                <label class="edit-label" for="email-input"> à </label>
                                <input class="edit-input d-inline-block ms-2" style="width: 55px;" type="number" maxlength="2" min="1" autocomplete="on" name="ideal_age_byday" value="<?= $ideal_age_byday->get_user(); ?>">
                            </div>
                        </div>

                        <div class="text-start width-100">
                            <label class="edit-label" for="ideal_status_marital-input">Quel est sont statut marital ?</label>
                            <select name="ideal_status_marital" class="form-select edit-select" style="text-transform: inherit;">
                                <option value="célibataire" <?= ($ideal_status_marital->get_user() == "célibataire") ? "selected" : "" ?>>Célibataire</option>
                                <option value="séparée" <?= ($ideal_status_marital->get_user() == "séparée") ? "selected" : "" ?>>Séparée</option>
                                <option value="veuf" <?= ($ideal_status_marital->get_user() == "veuf") ? "selected" : "" ?>>veuf</option>
                                <option value="veuve" <?= ($ideal_status_marital->get_user() == "veuve") ? "selected" : "" ?>>veuve</option>
                            </select>
                        </div>

                        <div class="text-start width-100">
                            <label class="edit-label" for="ideal_enfant-input">Il/Elle veut des enfants ?</label>
                            <select name="ideal_enfant" class="form-select edit-select" style="text-transform: inherit;">
                                <option value="veut des enfants" <?= ($ideal_enfant->get_user() == "veut des enfants") ? "selected" : "" ?>>Veut des enfants</option>
                                <option value="ne veut pas d'enfants" <?= ($ideal_enfant->get_user() == "ne veut pas d'enfants") ? "selected" : "" ?>>Ne veut pas d'enfants</option>
                                <option value="rien n'est décidé" <?= ($ideal_enfant->get_user() == "rien n'est décidé") ? "selected" : "" ?>>Rien n'est décidé</option>
                            </select>
                        </div>

                    </div>

                    <div class="col-lg-5 d-inline-block me-4 ms-4">

                        <div class="text-start width-100">
                            <label class="edit-label" for="ideal_taille-input">Quelle est sa taille ?</label>
                            <select name="ideal_taille" class="form-select edit-select" style="text-transform: inherit;">
                                <?php for ($i = 140; $i < 201; $i++) { ?>
                                    <?php if ($i == 140) { ?>
                                        <option value="-<?= $i ?>" <?= ($ideal_taille->get_user() == "140") ? "selected" : "" ?>>-<?= $i ?> cm</option>
                                    <?php } ?>
                                    <?php if ($i == 200) { ?>
                                        <option value="+<?= $i ?>" <?= ($ideal_taille->get_user() == "200") ? "selected" : "" ?>>+<?= $i ?> cm</option>
                                    <?php } ?>
                                    <?php if ($i != 140 && $i != 200) { ?>
                                        <option value="<?= $i ?>" <?= ($ideal_taille->get_user() != "140" && $ideal_taille->get_user() != "200" && $ideal_taille->get_user() == $i) ? "selected" : "" ?>><?= $i ?> cm</option>
                                    <?php } ?>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="text-start width-100">
                            <label class="edit-label" for="ideal_poids-input">Sa silhouette est plutôt ?</label>
                            <select name="ideal_poids" class="form-select edit-select" style="text-transform: inherit;">
                                <option value="normale" <?= ($ideal_poids->get_user() == "normale") ? "selected" : "" ?>>Normale</option>
                                <option value="sportive" <?= ($ideal_poids->get_user() == "sportive") ? "selected" : "" ?>>Sportive</option>
                                <option value="mince" <?= ($ideal_poids->get_user() == "mince") ? "selected" : "" ?>>Mince</option>
                                <option value="quelques kilos en trop" <?= ($ideal_poids->get_user() == "quelques kilos en trop") ? "selected" : "" ?>>Quelques kilos en trop</option>
                                <option value="<?= ($je_suis->get_user() == "1") ? "ronde" : "rond" ?>" <?= ($ideal_poids->get_user() == "ronde" && $je_suis->get_user() == "1") ? "selected" : "" ?> <?= ($ideal_poids->get_user() == "rond" && $je_suis->get_user() == "2") ? "selected" : "" ?>><?= ($je_suis->get_user() == "1") ? "Ronde" : "Rond" ?></option>
                                <option value="trapue" <?= ($ideal_poids->get_user() == "sportive") ? "selected" : "" ?>>Trapue</option>
                            </select>
                        </div>

                        <div class="text-start width-100">
                            <label class="edit-label" for="ideal_fume-input">Il/Elle fume ?</label>
                            <select name="ideal_fume" class="form-select edit-select" style="text-transform: inherit;">
                                <option value="fume occasionnellement" <?= ($ideal_fume->get_user() == "fume occasionnellement") ? "selected" : "" ?>>Fume occasionnellement</option>
                                <option value="fume régulièrement" <?= ($ideal_fume->get_user() == "fume régulièrement") ? "selected" : "" ?>>Fume régulièrement</option>
                                <option value="essaye d'arrêter" <?= ($ideal_fume->get_user() == "essaye d'arrêter") ? "selected" : "" ?>>Essaye d'arrêter</option>
                                <option value="ne fume pas" <?= ($ideal_fume->get_user() == "ne fume pas") ? "selected" : "" ?>>Ne fume pas</option>
                            </select>
                        </div>

                    </div>

                    <div class="text-start width-50 m-auto">
                        <label for="ideal_loisirs" class="edit-label">Les loisirs :</label>
                        <select name="ideal_loisirs" class="form-select edit-select" style="text-transform: inherit;">
                            <option value="" selected disabled>Faites un choix</option>
                            <option value="" disabled>--------------</option>
                            <option value="aller au cinéma, au théâtre, à des concerts" <?= ($ideal_loisirs->get_user() == "aller au cinéma, au théâtre, à des concerts") ? "selected" : "" ?>>Aller au cinéma, au théâtre, à des concerts</option>
                            <option value="pratiquer la spéléologie" <?= ($ideal_loisirs->get_user() == "pratiquer la spéléologie") ? "selected" : "" ?>>Pratiquer la spéléologie</option>
                            <option value="participer à la rénovation d'une maison" <?= ($ideal_loisirs->get_user() == "pratiquer la spéléologie") ? "selected" : "" ?>>Participer à la rénovation d'une maison</option>
                            <option value="aider un enfant à faire ses devoirs" <?= ($ideal_loisirs->get_user() == "aider un enfant à faire ses devoirs") ? "selected" : "" ?>>Aider un enfant à faire ses devoirs</option>
                            <option value="pratiquer un sport régulièrement" <?= ($ideal_loisirs->get_user() == "pratiquer un sport régulièrement") ? "selected" : "" ?>>Pratiquer un sport régulièrement</option>
                            <option value="jouer aux échecs, aux dames, à des jeux de stratégie" <?= ($ideal_loisirs->get_user() == "jouer aux échecs, aux dames, à des jeux de stratégie") ? "selected" : "" ?>>Jouer aux échecs, aux dames, à des jeux de stratégie</option>
                            <option value="construire des maquettes" <?= ($ideal_loisirs->get_user() == "construire des maquettes") ? "selected" : "" ?>>Construire des maquettes</option>
                            <option value="faire de la poterie, des bijoux, des objets décoratifs" <?= ($ideal_loisirs->get_user() == "faire de la poterie, des bijoux, des objets décoratifs") ? "selected" : "" ?>>Faire de la poterie, des bijoux, des objets décoratifs</option>
                            <option value="etre secouriste, pompier bénévole" <?= ($ideal_loisirs->get_user() == "etre secouriste, pompier bénévole") ? "selected" : "" ?>>Etre secouriste, pompier bénévole</option>
                            <option value="aller en montagne, faire de l'escalade" <?= ($ideal_loisirs->get_user() == "aller en montagne, faire de l'escalade") ? "selected" : "" ?>>Aller en montagne, faire de l'escalade</option>
                            <option value="danser" <?= ($ideal_loisirs->get_user() == "danser") ? "selected" : "" ?>>Danser</option>
                            <option value="jardiner" <?= ($ideal_loisirs->get_user() == "jardiner") ? "selected" : "" ?>>Jardiner</option>
                            <option value="surfer sur le web" <?= ($ideal_loisirs->get_user() == "surfer sur le web") ? "selected" : "" ?>>Surfer sur le web</option>
                            <option value="faire du skate, du roller, du VTT" <?= ($ideal_loisirs->get_user() == "faire du skate, du roller, du VTT") ? "selected" : "" ?>>Faire du skate, du roller, du VTT</option>
                            <option value="jouer aux jeux vidéo" <?= ($ideal_loisirs->get_user() == "jouer aux jeux vidéo") ? "selected" : "" ?>>Jouer aux jeux vidéo</option>
                            <option value="balade en forêt" <?= ($ideal_loisirs->get_user() == "balade en forêt") ? "selected" : "" ?>>Balade en forêt</option>
                        </select>
                    </div>

                    <div class="text-start width-50 m-auto">
                        <label class="edit-label" for="ideal_fume-input">Votre démarquation ?</label>
                        <textarea name="demarquation" style="height: 150px;" class="form-control edit-input"><?= $ideal_demarquation->get_user(); ?></textarea>
                    </div>

                    <div class="text-center m-auto box-submit">
                        <button class="btn btn-success btn-navbar btn-edit">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>