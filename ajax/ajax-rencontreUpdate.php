<?php

include '../config/config.php';
include "../assets/langs/" . $lang . ".php";
include '../config/fonctions.php';
include '../config/connexion.php';

if (!empty($_POST)) {

    $result = selectDB('*', 'users', '1 ORDER BY created_at DESC, id DESC', $db, '*');

    // Calcul date naissance
    $age = $_POST['age'];
    $date = date('Y');
    $datefinal = $date - $age;

    foreach ($result as $data) {

        $sub_naissance = substr($data['naissance'], 0, 4);

        if ($sub_naissance == $datefinal && $_POST['taille'] == $data['taille_adulte']) {

            if (!empty($_POST['ideal_poids']) && empty($_POST['recherche']) && empty($_POST['ideal_status_marital']) && empty($_POST['ideal_enfant']) && empty($_POST['ideal_fume']) && empty($_POST['ideal_loisirs'])) {

                if ($_POST['ideal_poids'] == $data['poids_adulte']) { ?>

                    <?php $result_avatar = selectDB('*', 'users_avatar', 'user_id = "' . $data['user_id'] . '" ORDER BY id DESC', $db, '1'); ?>

                    <?php $result_favorites = selectDB('*', 'favorites', 'fav_user_id = "' . $data['id'] . '" ORDER BY id DESC', $db, '1');  ?>

                    <?php if ($data['id'] != $_SESSION['user_id']) { ?>

                        <div class="card mb-2 mt-2 ms-2 me-2 empty_click_card empty_click_card_<?= $data['id'] ?> d-inline-block">

                            <div class="row">

                                <div class="col-md-4 avatar" data-id="<?= $data['id'] ?>">
                                    <?php if ($result_avatar['validation'] == 1) { ?>
                                        <img class="empty_avatar_<?= $data['id'] ?>" src="https://love-and-heart.fr/assets/uploads/<?= $result_avatar['value']; ?>" />
                                    <?php } else { ?>
                                        <img class="empty_avatar_<?= $data['id'] ?>" src="https://love-and-heart.fr/assets/uploads/default.png" />
                                    <?php } ?>
                                </div>
                                <div class="col-md-8 empty_click_card_desc empty_click_card_desc_<?= $data['id'] ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><a class="profil_link" href="/profil/<?= $data['id'] ?>"><?= $data['prenom'] ?></a><span class="ms-2">(<?= age($data['naissance']); ?> ans)</span><?php if ($data['premium'] == 2) { ?><span class="ms-2"><i class="fas fa-crown" style="color: gold;"></i></span><?php } ?>
                                            <div class="float-end ">
                                                <div class="ms-2 <?php if ($result_favorites['fav_user_id'] != $data['id']) { ?>hearts<?php } else { ?>hearts_cancel<?php } ?> d-inline-block" data-id="<?= $data['id'] ?>" data-user="<?= $_SESSION['user_id'] ?>">
                                                    <?php if ($result_favorites['fav_user_id'] != $data['id']) { ?><i class="far fa-heart heart_fa_<?= $data['id'] ?>" style="color: red;"></i><i class="fas fa-heart heart_fa2_<?= $data['id'] ?>" style="color: red; display: none;"></i><?php } else { ?>
                                                        <i class="fas fa-heart heart_fa2_<?= $data['id'] ?>" style="color: red;"></i><i class="fas fa-heart heart_fa_<?= $data['id'] ?>" style="color: red;display:none;"></i><?php } ?>
                                                </div>

                                                <?php if ($data['connected'] != 3) { ?>

                                                    <div class="me-2 ms-2 msg show_msg d-inline-block" data-id="<?= $data['id'] ?>">
                                                        <i class="far fa-comment-dots msg_fa_<?= $data['id'] ?>" style="color: #2bb412;"></i>
                                                        <i class="fas fa-comment-dots msg_fa2_<?= $data['id'] ?>" style="color: #2bb412; display: none;"></i>
                                                    </div>

                                                <?php } else { ?>

                                                    <div class="me-2 ms-2 msg d-inline-block">
                                                        <i class="far fa-comment-dots msg_fa_<?= $data['id'] ?>" style="color: red;"></i>
                                                        <i class="fas fa-comment-dots msg_fa2_<?= $data['id'] ?>" style="color: red; display: none;"></i>
                                                    </div>

                                                <?php } ?>
                                            </div>
                                        </h5>
                                        <p class="card-desc"><?= $data['ideal_demarquation'] ?></p>
                                        <p class="card-text"><small class="text-muted">Mise à jour <?= set_minutes2($data['updated_at']); ?></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                <?php }
            }

            if (!empty($_POST['recherche']) && empty($_POST['ideal_poids']) && empty($_POST['ideal_status_marital']) && empty($_POST['ideal_enfant']) && empty($_POST['ideal_fume']) && empty($_POST['ideal_loisirs'])) {

                if ($_POST['recherche'] == $data['recherche']) { ?>
                    <?php $result_avatar = selectDB('*', 'users_avatar', 'user_id = "' . $data['user_id'] . '" ORDER BY id DESC', $db, '1'); ?>

                    <?php $result_favorites = selectDB('*', 'favorites', 'fav_user_id = "' . $data['id'] . '" ORDER BY id DESC', $db, '1');  ?>

                    <?php if ($data['id'] != $_SESSION['user_id']) { ?>

                        <div class="card mb-2 mt-2 ms-2 me-2 empty_click_card empty_click_card_<?= $data['id'] ?> d-inline-block">

                            <div class="row">

                                <div class="col-md-4 avatar" data-id="<?= $data['id'] ?>">
                                    <?php if ($result_avatar['validation'] == 1) { ?>
                                        <img class="empty_avatar_<?= $data['id'] ?>" src="https://love-and-heart.fr/assets/uploads/<?= $result_avatar['value']; ?>" />
                                    <?php } else { ?>
                                        <img class="empty_avatar_<?= $data['id'] ?>" src="https://love-and-heart.fr/assets/uploads/default.png" />
                                    <?php } ?>
                                </div>
                                <div class="col-md-8 empty_click_card_desc empty_click_card_desc_<?= $data['id'] ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><a class="profil_link" href="/profil/<?= $data['id'] ?>"><?= $data['prenom'] ?></a><span class="ms-2">(<?= age($data['naissance']); ?> ans)</span><?php if ($data['premium'] == 2) { ?><span class="ms-2"><i class="fas fa-crown" style="color: gold;"></i></span><?php } ?>
                                            <div class="float-end ">
                                                <div class="ms-2 <?php if ($result_favorites['fav_user_id'] != $data['id']) { ?>hearts<?php } else { ?>hearts_cancel<?php } ?> d-inline-block" data-id="<?= $data['id'] ?>" data-user="<?= $_SESSION['user_id'] ?>">
                                                    <?php if ($result_favorites['fav_user_id'] != $data['id']) { ?><i class="far fa-heart heart_fa_<?= $data['id'] ?>" style="color: red;"></i><i class="fas fa-heart heart_fa2_<?= $data['id'] ?>" style="color: red; display: none;"></i><?php } else { ?>
                                                        <i class="fas fa-heart heart_fa2_<?= $data['id'] ?>" style="color: red;"></i><i class="fas fa-heart heart_fa_<?= $data['id'] ?>" style="color: red;display:none;"></i><?php } ?>
                                                </div>

                                                <?php if ($data['connected'] != 3) { ?>

                                                    <div class="me-2 ms-2 msg show_msg d-inline-block" data-id="<?= $data['id'] ?>">
                                                        <i class="far fa-comment-dots msg_fa_<?= $data['id'] ?>" style="color: #2bb412;"></i>
                                                        <i class="fas fa-comment-dots msg_fa2_<?= $data['id'] ?>" style="color: #2bb412; display: none;"></i>
                                                    </div>

                                                <?php } else { ?>

                                                    <div class="me-2 ms-2 msg d-inline-block">
                                                        <i class="far fa-comment-dots msg_fa_<?= $data['id'] ?>" style="color: red;"></i>
                                                        <i class="fas fa-comment-dots msg_fa2_<?= $data['id'] ?>" style="color: red; display: none;"></i>
                                                    </div>

                                                <?php } ?>
                                            </div>
                                        </h5>
                                        <p class="card-desc"><?= $data['ideal_demarquation'] ?></p>
                                        <p class="card-text"><small class="text-muted">Mise à jour <?= set_minutes2($data['updated_at']); ?></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php }
            }

            if (!empty($_POST['ideal_status_marital']) && empty($_POST['recherche']) && empty($_POST['ideal_poids']) && empty($_POST['ideal_enfant']) && empty($_POST['ideal_fume']) && empty($_POST['ideal_loisirs'])) {

                if ($_POST['ideal_status_marital'] == $data['status_marital']) { ?>
                    <?php $result_avatar = selectDB('*', 'users_avatar', 'user_id = "' . $data['user_id'] . '" ORDER BY id DESC', $db, '1'); ?>

                    <?php $result_favorites = selectDB('*', 'favorites', 'fav_user_id = "' . $data['id'] . '" ORDER BY id DESC', $db, '1');  ?>

                    <?php if ($data['id'] != $_SESSION['user_id']) { ?>

                        <div class="card mb-2 mt-2 ms-2 me-2 empty_click_card empty_click_card_<?= $data['id'] ?> d-inline-block">

                            <div class="row">

                                <div class="col-md-4 avatar" data-id="<?= $data['id'] ?>">
                                    <?php if ($result_avatar['validation'] == 1) { ?>
                                        <img class="empty_avatar_<?= $data['id'] ?>" src="https://love-and-heart.fr/assets/uploads/<?= $result_avatar['value']; ?>" />
                                    <?php } else { ?>
                                        <img class="empty_avatar_<?= $data['id'] ?>" src="https://love-and-heart.fr/assets/uploads/default.png" />
                                    <?php } ?>
                                </div>
                                <div class="col-md-8 empty_click_card_desc empty_click_card_desc_<?= $data['id'] ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><a class="profil_link" href="/profil/<?= $data['id'] ?>"><?= $data['prenom'] ?></a><span class="ms-2">(<?= age($data['naissance']); ?> ans)</span><?php if ($data['premium'] == 2) { ?><span class="ms-2"><i class="fas fa-crown" style="color: gold;"></i></span><?php } ?>
                                            <div class="float-end ">
                                                <div class="ms-2 <?php if ($result_favorites['fav_user_id'] != $data['id']) { ?>hearts<?php } else { ?>hearts_cancel<?php } ?> d-inline-block" data-id="<?= $data['id'] ?>" data-user="<?= $_SESSION['user_id'] ?>">
                                                    <?php if ($result_favorites['fav_user_id'] != $data['id']) { ?><i class="far fa-heart heart_fa_<?= $data['id'] ?>" style="color: red;"></i><i class="fas fa-heart heart_fa2_<?= $data['id'] ?>" style="color: red; display: none;"></i><?php } else { ?>
                                                        <i class="fas fa-heart heart_fa2_<?= $data['id'] ?>" style="color: red;"></i><i class="fas fa-heart heart_fa_<?= $data['id'] ?>" style="color: red;display:none;"></i><?php } ?>
                                                </div>

                                                <?php if ($data['connected'] != 3) { ?>

                                                    <div class="me-2 ms-2 msg show_msg d-inline-block" data-id="<?= $data['id'] ?>">
                                                        <i class="far fa-comment-dots msg_fa_<?= $data['id'] ?>" style="color: #2bb412;"></i>
                                                        <i class="fas fa-comment-dots msg_fa2_<?= $data['id'] ?>" style="color: #2bb412; display: none;"></i>
                                                    </div>

                                                <?php } else { ?>

                                                    <div class="me-2 ms-2 msg d-inline-block">
                                                        <i class="far fa-comment-dots msg_fa_<?= $data['id'] ?>" style="color: red;"></i>
                                                        <i class="fas fa-comment-dots msg_fa2_<?= $data['id'] ?>" style="color: red; display: none;"></i>
                                                    </div>

                                                <?php } ?>
                                            </div>
                                        </h5>
                                        <p class="card-desc"><?= $data['ideal_demarquation'] ?></p>
                                        <p class="card-text"><small class="text-muted">Mise à jour <?= set_minutes2($data['updated_at']); ?></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php }
            }

            if (!empty($_POST['ideal_enfant']) && empty($_POST['recherche']) && empty($_POST['ideal_poids'])  && empty($_POST['ideal_status_marital']) && empty($_POST['ideal_fume']) && empty($_POST['ideal_loisirs'])) {

                if ($_POST['ideal_enfant'] == $data['parent_envie']) { ?>
                    <?php $result_avatar = selectDB('*', 'users_avatar', 'user_id = "' . $data['user_id'] . '" ORDER BY id DESC', $db, '1'); ?>

                    <?php $result_favorites = selectDB('*', 'favorites', 'fav_user_id = "' . $data['id'] . '" ORDER BY id DESC', $db, '1');  ?>

                    <?php if ($data['id'] != $_SESSION['user_id']) { ?>

                        <div class="card mb-2 mt-2 ms-2 me-2 empty_click_card empty_click_card_<?= $data['id'] ?> d-inline-block">

                            <div class="row">

                                <div class="col-md-4 avatar" data-id="<?= $data['id'] ?>">
                                    <?php if ($result_avatar['validation'] == 1) { ?>
                                        <img class="empty_avatar_<?= $data['id'] ?>" src="https://love-and-heart.fr/assets/uploads/<?= $result_avatar['value']; ?>" />
                                    <?php } else { ?>
                                        <img class="empty_avatar_<?= $data['id'] ?>" src="https://love-and-heart.fr/assets/uploads/default.png" />
                                    <?php } ?>
                                </div>
                                <div class="col-md-8 empty_click_card_desc empty_click_card_desc_<?= $data['id'] ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><a class="profil_link" href="/profil/<?= $data['id'] ?>"><?= $data['prenom'] ?></a><span class="ms-2">(<?= age($data['naissance']); ?> ans)</span><?php if ($data['premium'] == 2) { ?><span class="ms-2"><i class="fas fa-crown" style="color: gold;"></i></span><?php } ?>
                                            <div class="float-end ">
                                                <div class="ms-2 <?php if ($result_favorites['fav_user_id'] != $data['id']) { ?>hearts<?php } else { ?>hearts_cancel<?php } ?> d-inline-block" data-id="<?= $data['id'] ?>" data-user="<?= $_SESSION['user_id'] ?>">
                                                    <?php if ($result_favorites['fav_user_id'] != $data['id']) { ?><i class="far fa-heart heart_fa_<?= $data['id'] ?>" style="color: red;"></i><i class="fas fa-heart heart_fa2_<?= $data['id'] ?>" style="color: red; display: none;"></i><?php } else { ?>
                                                        <i class="fas fa-heart heart_fa2_<?= $data['id'] ?>" style="color: red;"></i><i class="fas fa-heart heart_fa_<?= $data['id'] ?>" style="color: red;display:none;"></i><?php } ?>
                                                </div>

                                                <?php if ($data['connected'] != 3) { ?>

                                                    <div class="me-2 ms-2 msg show_msg d-inline-block" data-id="<?= $data['id'] ?>">
                                                        <i class="far fa-comment-dots msg_fa_<?= $data['id'] ?>" style="color: #2bb412;"></i>
                                                        <i class="fas fa-comment-dots msg_fa2_<?= $data['id'] ?>" style="color: #2bb412; display: none;"></i>
                                                    </div>

                                                <?php } else { ?>

                                                    <div class="me-2 ms-2 msg d-inline-block">
                                                        <i class="far fa-comment-dots msg_fa_<?= $data['id'] ?>" style="color: red;"></i>
                                                        <i class="fas fa-comment-dots msg_fa2_<?= $data['id'] ?>" style="color: red; display: none;"></i>
                                                    </div>

                                                <?php } ?>
                                            </div>
                                        </h5>
                                        <p class="card-desc"><?= $data['ideal_demarquation'] ?></p>
                                        <p class="card-text"><small class="text-muted">Mise à jour <?= set_minutes2($data['updated_at']); ?></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php   }
            }

            if (!empty($_POST['ideal_fume']) && empty($_POST['ideal_enfant']) && empty($_POST['recherche']) && empty($_POST['ideal_poids'])  && empty($_POST['ideal_status_marital'])) {

                if ($_POST['ideal_fume'] == $data['cigarette']) { ?>
                    <?php $result_avatar = selectDB('*', 'users_avatar', 'user_id = "' . $data['user_id'] . '" ORDER BY id DESC', $db, '1'); ?>

                    <?php $result_favorites = selectDB('*', 'favorites', 'fav_user_id = "' . $data['id'] . '" ORDER BY id DESC', $db, '1');  ?>

                    <?php if ($data['id'] != $_SESSION['user_id']) { ?>

                        <div class="card mb-2 mt-2 ms-2 me-2 empty_click_card empty_click_card_<?= $data['id'] ?> d-inline-block">

                            <div class="row">

                                <div class="col-md-4 avatar" data-id="<?= $data['id'] ?>">
                                    <?php if ($result_avatar['validation'] == 1) { ?>
                                        <img class="empty_avatar_<?= $data['id'] ?>" src="https://love-and-heart.fr/assets/uploads/<?= $result_avatar['value']; ?>" />
                                    <?php } else { ?>
                                        <img class="empty_avatar_<?= $data['id'] ?>" src="https://love-and-heart.fr/assets/uploads/default.png" />
                                    <?php } ?>
                                </div>
                                <div class="col-md-8 empty_click_card_desc empty_click_card_desc_<?= $data['id'] ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><a class="profil_link" href="/profil/<?= $data['id'] ?>"><?= $data['prenom'] ?></a><span class="ms-2">(<?= age($data['naissance']); ?> ans)</span><?php if ($data['premium'] == 2) { ?><span class="ms-2"><i class="fas fa-crown" style="color: gold;"></i></span><?php } ?>
                                            <div class="float-end ">
                                                <div class="ms-2 <?php if ($result_favorites['fav_user_id'] != $data['id']) { ?>hearts<?php } else { ?>hearts_cancel<?php } ?> d-inline-block" data-id="<?= $data['id'] ?>" data-user="<?= $_SESSION['user_id'] ?>">
                                                    <?php if ($result_favorites['fav_user_id'] != $data['id']) { ?><i class="far fa-heart heart_fa_<?= $data['id'] ?>" style="color: red;"></i><i class="fas fa-heart heart_fa2_<?= $data['id'] ?>" style="color: red; display: none;"></i><?php } else { ?>
                                                        <i class="fas fa-heart heart_fa2_<?= $data['id'] ?>" style="color: red;"></i><i class="fas fa-heart heart_fa_<?= $data['id'] ?>" style="color: red;display:none;"></i><?php } ?>
                                                </div>

                                                <?php if ($data['connected'] != 3) { ?>

                                                    <div class="me-2 ms-2 msg show_msg d-inline-block" data-id="<?= $data['id'] ?>">
                                                        <i class="far fa-comment-dots msg_fa_<?= $data['id'] ?>" style="color: #2bb412;"></i>
                                                        <i class="fas fa-comment-dots msg_fa2_<?= $data['id'] ?>" style="color: #2bb412; display: none;"></i>
                                                    </div>

                                                <?php } else { ?>

                                                    <div class="me-2 ms-2 msg d-inline-block">
                                                        <i class="far fa-comment-dots msg_fa_<?= $data['id'] ?>" style="color: red;"></i>
                                                        <i class="fas fa-comment-dots msg_fa2_<?= $data['id'] ?>" style="color: red; display: none;"></i>
                                                    </div>

                                                <?php } ?>
                                            </div>
                                        </h5>
                                        <p class="card-desc"><?= $data['ideal_demarquation'] ?></p>
                                        <p class="card-text"><small class="text-muted">Mise à jour <?= set_minutes2($data['updated_at']); ?></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php }
            }

            if (!empty($_POST['ideal_loisirs']) && empty($_POST['ideal_fume']) && empty($_POST['ideal_enfant']) && empty($_POST['recherche']) && empty($_POST['ideal_poids'])  && empty($_POST['ideal_status_marital'])) {

                if ($_POST['ideal_loisirs'] == $data['loisirs']) { ?>
                    <?php $result_avatar = selectDB('*', 'users_avatar', 'user_id = "' . $data['user_id'] . '" ORDER BY id DESC', $db, '1'); ?>

                    <?php $result_favorites = selectDB('*', 'favorites', 'fav_user_id = "' . $data['id'] . '" ORDER BY id DESC', $db, '1');  ?>

                    <?php if ($data['id'] != $_SESSION['user_id']) { ?>

                        <div class="card mb-2 mt-2 ms-2 me-2 empty_click_card empty_click_card_<?= $data['id'] ?> d-inline-block">

                            <div class="row">

                                <div class="col-md-4 avatar" data-id="<?= $data['id'] ?>">
                                    <?php if ($result_avatar['validation'] == 1) { ?>
                                        <img class="empty_avatar_<?= $data['id'] ?>" src="https://love-and-heart.fr/assets/uploads/<?= $result_avatar['value']; ?>" />
                                    <?php } else { ?>
                                        <img class="empty_avatar_<?= $data['id'] ?>" src="https://love-and-heart.fr/assets/uploads/default.png" />
                                    <?php } ?>
                                </div>
                                <div class="col-md-8 empty_click_card_desc empty_click_card_desc_<?= $data['id'] ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><a class="profil_link" href="/profil/<?= $data['id'] ?>"><?= $data['prenom'] ?></a><span class="ms-2">(<?= age($data['naissance']); ?> ans)</span><?php if ($data['premium'] == 2) { ?><span class="ms-2"><i class="fas fa-crown" style="color: gold;"></i></span><?php } ?>
                                            <div class="float-end ">
                                                <div class="ms-2 <?php if ($result_favorites['fav_user_id'] != $data['id']) { ?>hearts<?php } else { ?>hearts_cancel<?php } ?> d-inline-block" data-id="<?= $data['id'] ?>" data-user="<?= $_SESSION['user_id'] ?>">
                                                    <?php if ($result_favorites['fav_user_id'] != $data['id']) { ?><i class="far fa-heart heart_fa_<?= $data['id'] ?>" style="color: red;"></i><i class="fas fa-heart heart_fa2_<?= $data['id'] ?>" style="color: red; display: none;"></i><?php } else { ?>
                                                        <i class="fas fa-heart heart_fa2_<?= $data['id'] ?>" style="color: red;"></i><i class="fas fa-heart heart_fa_<?= $data['id'] ?>" style="color: red;display:none;"></i><?php } ?>
                                                </div>

                                                <?php if ($data['connected'] != 3) { ?>

                                                    <div class="me-2 ms-2 msg show_msg d-inline-block" data-id="<?= $data['id'] ?>">
                                                        <i class="far fa-comment-dots msg_fa_<?= $data['id'] ?>" style="color: #2bb412;"></i>
                                                        <i class="fas fa-comment-dots msg_fa2_<?= $data['id'] ?>" style="color: #2bb412; display: none;"></i>
                                                    </div>

                                                <?php } else { ?>

                                                    <div class="me-2 ms-2 msg d-inline-block">
                                                        <i class="far fa-comment-dots msg_fa_<?= $data['id'] ?>" style="color: red;"></i>
                                                        <i class="fas fa-comment-dots msg_fa2_<?= $data['id'] ?>" style="color: red; display: none;"></i>
                                                    </div>

                                                <?php } ?>
                                            </div>
                                        </h5>
                                        <p class="card-desc"><?= $data['ideal_demarquation'] ?></p>
                                        <p class="card-text"><small class="text-muted">Mise à jour <?= set_minutes2($data['updated_at']); ?></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php }
            }

            if (!empty($_POST['ideal_poids']) && !empty($_POST['recherche']) && !empty($_POST['ideal_status_marital']) && !empty($_POST['ideal_enfant']) && !empty($_POST['ideal_fume']) && !empty($_POST['ideal_loisirs'])) {

                if ($_POST['ideal_poids'] == $data['poids_adulte'] && $_POST['recherche'] == $data['recherche'] && $_POST['ideal_status_marital'] == $data['status_marital'] && $_POST['ideal_enfant'] == $data['parent_envie'] && $_POST['ideal_fume'] == $data['cigarette'] && $_POST['ideal_loisirs'] == $data['loisirs']) { ?>
                    <?php $result_avatar = selectDB('*', 'users_avatar', 'user_id = "' . $data['user_id'] . '" ORDER BY id DESC', $db, '1'); ?>

                    <?php $result_favorites = selectDB('*', 'favorites', 'fav_user_id = "' . $data['id'] . '" ORDER BY id DESC', $db, '1');  ?>

                    <?php if ($data['id'] != $_SESSION['user_id']) { ?>

                        <div class="card mb-2 mt-2 ms-2 me-2 empty_click_card empty_click_card_<?= $data['id'] ?> d-inline-block">

                            <div class="row">

                                <div class="col-md-4 avatar" data-id="<?= $data['id'] ?>">
                                    <?php if ($result_avatar['validation'] == 1) { ?>
                                        <img class="empty_avatar_<?= $data['id'] ?>" src="https://love-and-heart.fr/assets/uploads/<?= $result_avatar['value']; ?>" />
                                    <?php } else { ?>
                                        <img class="empty_avatar_<?= $data['id'] ?>" src="https://love-and-heart.fr/assets/uploads/default.png" />
                                    <?php } ?>
                                </div>
                                <div class="col-md-8 empty_click_card_desc empty_click_card_desc_<?= $data['id'] ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><a class="profil_link" href="/profil/<?= $data['id'] ?>"><?= $data['prenom'] ?></a><span class="ms-2">(<?= age($data['naissance']); ?> ans)</span><?php if ($data['premium'] == 2) { ?><span class="ms-2"><i class="fas fa-crown" style="color: gold;"></i></span><?php } ?>
                                            <div class="float-end ">
                                                <div class="ms-2 <?php if ($result_favorites['fav_user_id'] != $data['id']) { ?>hearts<?php } else { ?>hearts_cancel<?php } ?> d-inline-block" data-id="<?= $data['id'] ?>" data-user="<?= $_SESSION['user_id'] ?>">
                                                    <?php if ($result_favorites['fav_user_id'] != $data['id']) { ?><i class="far fa-heart heart_fa_<?= $data['id'] ?>" style="color: red;"></i><i class="fas fa-heart heart_fa2_<?= $data['id'] ?>" style="color: red; display: none;"></i><?php } else { ?>
                                                        <i class="fas fa-heart heart_fa2_<?= $data['id'] ?>" style="color: red;"></i><i class="fas fa-heart heart_fa_<?= $data['id'] ?>" style="color: red;display:none;"></i><?php } ?>
                                                </div>

                                                <?php if ($data['connected'] != 3) { ?>

                                                    <div class="me-2 ms-2 msg show_msg d-inline-block" data-id="<?= $data['id'] ?>">
                                                        <i class="far fa-comment-dots msg_fa_<?= $data['id'] ?>" style="color: #2bb412;"></i>
                                                        <i class="fas fa-comment-dots msg_fa2_<?= $data['id'] ?>" style="color: #2bb412; display: none;"></i>
                                                    </div>

                                                <?php } else { ?>

                                                    <div class="me-2 ms-2 msg d-inline-block">
                                                        <i class="far fa-comment-dots msg_fa_<?= $data['id'] ?>" style="color: red;"></i>
                                                        <i class="fas fa-comment-dots msg_fa2_<?= $data['id'] ?>" style="color: red; display: none;"></i>
                                                    </div>

                                                <?php } ?>
                                            </div>
                                        </h5>
                                        <p class="card-desc"><?= $data['ideal_demarquation'] ?></p>
                                        <p class="card-text"><small class="text-muted">Mise à jour <?= set_minutes2($data['updated_at']); ?></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php }
            }

            if (empty($_POST['ideal_poids']) && empty($_POST['recherche']) && empty($_POST['ideal_status_marital']) && empty($_POST['ideal_enfant']) && empty($_POST['ideal_fume']) && empty($_POST['ideal_loisirs'])) { ?>

                <?php $result_avatar = selectDB('*', 'users_avatar', 'user_id = "' . $data['user_id'] . '" ORDER BY id DESC', $db, '1'); ?>

                <?php $result_favorites = selectDB('*', 'favorites', 'fav_user_id = "' . $data['id'] . '" ORDER BY id DESC', $db, '1');  ?>

                <?php if ($data['id'] != $_SESSION['user_id']) { ?>

                    <div class="card mb-2 mt-2 ms-2 me-2 empty_click_card empty_click_card_<?= $data['id'] ?> d-inline-block">

                        <div class="row">

                            <div class="col-md-4 avatar" data-id="<?= $data['id'] ?>">
                                <?php if ($result_avatar['validation'] == 1) { ?>
                                    <img class="empty_avatar_<?= $data['id'] ?>" src="https://love-and-heart.fr/assets/uploads/<?= $result_avatar['value']; ?>" />
                                <?php } else { ?>
                                    <img class="empty_avatar_<?= $data['id'] ?>" src="https://love-and-heart.fr/assets/uploads/default.png" />
                                <?php } ?>
                            </div>
                            <div class="col-md-8 empty_click_card_desc empty_click_card_desc_<?= $data['id'] ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><a class="profil_link" href="/profil/<?= $data['id'] ?>"><?= $data['prenom'] ?></a><span class="ms-2">(<?= age($data['naissance']); ?> ans)</span><?php if ($data['premium'] == 2) { ?><span class="ms-2"><i class="fas fa-crown" style="color: gold;"></i></span><?php } ?>
                                        <div class="float-end ">
                                            <div class="ms-2 <?php if ($result_favorites['fav_user_id'] != $data['id']) { ?>hearts<?php } else { ?>hearts_cancel<?php } ?> d-inline-block" data-id="<?= $data['id'] ?>" data-user="<?= $_SESSION['user_id'] ?>">
                                                <?php if ($result_favorites['fav_user_id'] != $data['id']) { ?><i class="far fa-heart heart_fa_<?= $data['id'] ?>" style="color: red;"></i><i class="fas fa-heart heart_fa2_<?= $data['id'] ?>" style="color: red; display: none;"></i><?php } else { ?>
                                                    <i class="fas fa-heart heart_fa2_<?= $data['id'] ?>" style="color: red;"></i><i class="fas fa-heart heart_fa_<?= $data['id'] ?>" style="color: red;display:none;"></i><?php } ?>
                                            </div>

                                            <?php if ($data['connected'] != 3) { ?>

                                                <div class="me-2 ms-2 msg show_msg d-inline-block" data-id="<?= $data['id'] ?>">
                                                    <i class="far fa-comment-dots msg_fa_<?= $data['id'] ?>" style="color: #2bb412;"></i>
                                                    <i class="fas fa-comment-dots msg_fa2_<?= $data['id'] ?>" style="color: #2bb412; display: none;"></i>
                                                </div>

                                            <?php } else { ?>

                                                <div class="me-2 ms-2 msg d-inline-block">
                                                    <i class="far fa-comment-dots msg_fa_<?= $data['id'] ?>" style="color: red;"></i>
                                                    <i class="fas fa-comment-dots msg_fa2_<?= $data['id'] ?>" style="color: red; display: none;"></i>
                                                </div>

                                            <?php } ?>
                                        </div>
                                    </h5>
                                    <p class="card-desc"><?= $data['ideal_demarquation'] ?></p>
                                    <p class="card-text"><small class="text-muted">Mise à jour <?= set_minutes2($data['updated_at']); ?></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

<?php }
        }
    }
}
