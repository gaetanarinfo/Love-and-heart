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
            <div class="profil_gestion<?= ($premium->get_user() == "0") ? " essentiel" : "" ?>">
                <h3><i class="fas fa-camera-retro me-2"></i>Gérer ma photo de profil</h3>

                <div class="alert alert-danger" id="alert_danger" style="display: none;" role="alert">
                    <div class="message_danger"></div>
                </div>

                <div class="alert alert-success" id="alert_success" style="display: none;" role="alert">
                    <div class="message_success"></div>
                </div>

                <div class="container mb-3">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="mb-0">
                                <p class="title">Montrez votre plus beau sourire !</p>
                            </h4>

                            <p class="subtitle">Pour profiter de Love and heart, vous devez ajouter votre photo. Ne soyez pas timide et jetez-vous à l’eau !</p>
                        </div>
                    </div>
                </div>

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

                    <div id="message_validation">
                        <div class="alert alert-success" id="alert_success" role="alert">
                            <i class="fas fa-check me-2" style="color: #049804"></i>Votre photo sera moderée par notre service client en moins de 15 minutes.
                        </div>
                    </div>

                    <div class="resolution_error">
                        <div class="alert alert-danger" id="alert_danger" role="alert">
                            <i class="fas fa-times me-2" style="color: red"></i>La résolution de l'image est trop faible, elle doit être supérieure à : 360x360
                        </div>
                    </div>

                    <div class="cancel_img mt-3">
                        <button id="cancel_img" class="btn btn-info btn-accept">Effacer</button>
                        <button id="valide_img" class="btn btn-info btn-accept">Valider</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>