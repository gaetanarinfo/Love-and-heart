<?php $result_favorites = selectDB('*', 'favorites', 'user_id = "' . $_SESSION['user_id'] . '" ORDER BY id DESC', $db, '*');  ?>
<?php $favorites = selectDB('*', 'favorites', '1 ORDER BY id DESC', $db, '*');  ?>

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
                <h3><i class="fas fa-heart me-2" style="color: red;"></i>Mes coups de coeurs</h3>
                <?php foreach ($favorites as $key => $data) {  ?>

                    <?php $result_avatar = selectDB('*', 'users_avatar', 'user_id = "' . $data['fav_user_id'] . '" ORDER BY id DESC', $db, '1'); ?>

                    <?php $result_user = selectDB('*', 'users', 'id = "' . $data['fav_user_id'] . '" ORDER BY id DESC', $db, '1');  ?>

                    <div class="card mb-2 mt-2 ms-2 me-2 empty_click_card empty_click_card_<?= $data['fav_user_id'] ?> d-inline-block profil_card_<?= $data['fav_user_id'] ?>">

                        <div class="row">

                            <div class="col-md-4 avatare" data-id="<?= $data['fav_user_id'] ?>">
                                <?php if ($result_avatar['validation'] == 1) { ?>
                                    <img class="empty_avatar_<?= $data['fav_user_id'] ?>" src="https://love-and-heart.fr/assets/uploads/<?= $result_avatar['value']; ?>" />
                                <?php } else { ?>
                                    <img class="empty_avatar_<?= $data['fav_user_id'] ?>" src="https://love-and-heart.fr/assets/uploads/default.png" />
                                <?php } ?>
                            </div>
                            <div class="col-md-8 empty_click_card_desc empty_click_card_desc_<?= $data['fav_user_id'] ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><a class="profil_link" href="/profil/<?= $result_user['prenom'] ?>"><?= $result_user['prenom'] ?></a>
                                        <div class="float-end ">
                                            <div class="ms-2 <?php if ($data['fav_user_id'] != $result_user['id']) { ?>hearts<?php } else { ?>hearts_cancel<?php } ?> d-inline-block" data-id="<?= $data['fav_user_id'] ?>" data-user="<?= $_SESSION['user_id'] ?>">
                                                <?php if ($data['fav_user_id'] != $result_user['id']) { ?><i class="far fa-heart heart_fa_<?= $data['fav_user_id'] ?>" style="color: red;"></i><i class="fas fa-heart heart_fa2_<?= $data['fav_user_id'] ?>" style="color: red; display: none;"></i><?php } else { ?>
                                                    <i class="fas fa-heart heart_fa2_<?= $data['fav_user_id'] ?>" style="color: red;"></i><i class="fas fa-heart heart_fa_<?= $data['fav_user_id'] ?>" style="color: red;display:none;"></i><?php } ?>
                                            </div>

                                            <div class="me-2 ms-2 msg d-inline-block" data-id="<?= $data['fav_user_id'] ?>">
                                                <i class="far fa-comment-dots msg_fa_<?= $data['fav_user_id'] ?>" style="color: #2bb412;"></i>
                                                <i class="fas fa-comment-dots msg_fa2_<?= $data['fav_user_id'] ?>" style="color: #2bb412; display: none;"></i>
                                            </div>
                                        </div>
                                    </h5>
                                    <p class="card-desc"><?= $result_user['ideal_demarquation'] ?></p>
                                    <p class="card-text"><small class="text-muted">Mise à jour il y a <?= set_minutes($result_user['updated_at']); ?></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>