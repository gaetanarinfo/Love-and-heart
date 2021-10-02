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
                <h3><i class="fas fa-user-edit me-2"></i>Gérer mes coordonnées</h3>

                <div class="alert alert-danger" id="alert_danger" style="display: none;" role="alert">
                    <div class="message_danger"></div>
                </div>

                <div class="alert alert-success" id="alert_success" style="display: none;" role="alert">
                    <div class="message_success"></div>
                </div>

                <form id="edit_profil" method="POST">
                    <div class="col-lg-5 d-inline-block me-4 ms-4">
                        <div class="text-start width-100">
                            <label class="edit-label" for="email-input">Adresse email</label>
                            <input class="edit-input" type="email" autocomplete="on" name="email" value="<?= $email->get_user(); ?>" disabled readonly>
                        </div>

                        <div class="text-start width-100">
                            <label class="edit-label" for="prenom-input">Prénom</label>
                            <input class="edit-input" type="text" autocomplete="on" name="prenom" value="<?= $prenom->get_user(); ?>">
                        </div>

                        <div class="text-start width-100">
                            <label class="edit-label" for="nom-input">Nom</label>
                            <input class="edit-input" type="text" autocomplete="on" name="nom" value="<?= $nom->get_user(); ?>">
                        </div>

                        <div class="text-start width-100">
                            <label class="edit-label" for="naissance-input">Date de naissance</label>
                            <input class="edit-input" type="date" autocomplete="on" name="naissance" value="<?= $naissance->get_user(); ?>">
                        </div>

                        <div class="text-start width-100">
                            <label class="edit-label" for="civilite-input">Civilité</label>
                            <select name="civilite" class="form-select edit-select" style="text-transform: capitalize;">
                                <?php foreach ($result_civilites as $data) { ?>
                                    <option value="<?= $data['id']; ?>" <?= ($data['id'] == $je_suis->get_user()) ? "selected" : ""; ?>><?= $data['value']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-5 d-inline-block me-4 ms-4">
                        <div class="text-start width-100">
                            <label class="edit-label" for="adresse-input">Adresse</label>
                            <input class="edit-input" type="text" autocomplete="on" name="adresse" value="<?= $adresse->get_user(); ?>">
                        </div>

                        <div class="text-start width-100">
                            <label class="edit-label" for="ville-input">Ville</label>
                            <input class="edit-input" type="text" autocomplete="on" name="ville" value="<?= $ville->get_user(); ?>">
                        </div>

                        <div class="text-start width-100">
                            <label class="edit-label" for="postalCode-input">Code postal</label>
                            <input class="edit-input" type="text" max="5" pattern="[0-9]*" autocomplete="on" name="postalCode" value="<?= $postalCode->get_user(); ?>">
                        </div>

                        <div class="text-start width-100">
                            <label class="edit-label" for="country">Pays</label>
                            <select name="country" class="form-select edit-select">
                                <?php foreach ($result_pays as $data) { ?>
                                    <option value="<?= $data['alpha3']; ?>" <?= ($country->get_user() == $data['alpha3']) ? "selected" : "" ?>><?= $data['nom_fr_fr']; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="text-start width-100">
                            <label class="edit-label" for="ip-input">Votre ip</label>
                            <input class="edit-input" type="text" pattern="[0-9]*" disabled readonly autocomplete="on" name="ip" value="<?= $_SERVER['REMOTE_ADDR'] ?>">
                        </div>
                    </div>

                    <div class="text-center m-auto box-submit">
                        <button class="btn btn-success btn-navbar btn-edit">Valider</button>
                    </div>
                </form>

                <h3 class="mt-4"><i class="fas fa-eye me-2"></i>Modifier votre visibilité</h3>

                <div class="m-auto text-center">
                    <div class="form-check form-switch d-inline-block me-3">
                        <input class="form-check-input" type="checkbox" id="switch_zen" value="<?= ($zen->get_user() == 1) ? "1" : "0" ?>" <?= ($zen->get_user() == 1) ? "checked" : "" ?>>
                        <label class="form-check-label" for="switch_zen">Passez en mode « zen »</label>
                    </div>

                    <div class="form-check form-switch d-inline-block">
                        <input class="form-check-input" type="checkbox" id="switch_incognito" value="<?= ($incognito->get_user() == 1) ? "1" : "0" ?>" <?= ($incognito->get_user() == 1) ? "checked" : "" ?>>
                        <label class="form-check-label" for="switch_incognito">Adoptez le mode « incognito »</label>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>