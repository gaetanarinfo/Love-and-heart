<?php

include '../config/config.php';
include '../config/fonctions.php';
include '../config/connexion.php';

?>

<?php $users = selectDB('*', 'users', 'id != "' . $_SESSION['user_id'] . '" AND zen = 0 ORDER BY created_at DESC, id DESC', $db, '*'); ?>
<?php $users_get = selectDB('*', 'users', 'connected = "' . $_GET['status'] . '" AND id != "' . $_SESSION['user_id'] . '" AND zen = 0 ORDER BY created_at DESC, id DESC', $db, '*'); ?>

<hr class="mt-0" />

<?php if (empty($_GET['status'])) { ?>

    <?php foreach ($users as $data) { ?>

        <?php $result_avatar = selectDB('*', 'users_avatar', 'user_id = "' . $data['id'] . '" ORDER BY id DESC', $db, '1'); ?>

        <div class="user_profil mb-3">
            <?php if ($result_avatar['validation'] == 1) { ?>
                <img src="https://love-and-heart.fr/assets/uploads/<?= $result_avatar['value']; ?>" />
            <?php } else { ?>
                <img src="https://love-and-heart.fr/assets/uploads/default.png" />
            <?php } ?>
            <div class="user_title"><a href="/profil/<?= $data['id'] ?>"><span><?= $data['prenom'] ?> (<?= age($data['naissance']); ?> ans)</span></a> <?php if ($data['premium'] == 2) { ?><span class="ms-0"><i class="fas fa-crown" style="color: #1d7691;"></i></span><?php } ?></div>
            <div class="user_status">
                <div class="chat_status2 <?= ($data['connected'] == 1) ? "connected" : "" ?><?= ($data['connected'] == 2) ? "disturb" : "" ?><?= ($data['connected'] == 3) ? "offline" : "" ?> me-1"></div><span><?= ($data['connected'] == 1) ? "En ligne" : "" ?><?= ($data['connected'] == 2) ? "Absent" : "" ?><?= ($data['connected'] == 3) ? "Hors ligne" : "" ?></span>
            </div>
            <?php if ($data['connected'] != 3) { ?>
                <div class="user_subtitle send_message" data-id="<?= $data['id'] ?>"><i class="far fa-comment-dots" style="color: #2bb412;"></i> Envoyer un message...</div>
            <?php } else { ?>
                <div class="user_subtitle_d"><i class="fas fa-times" style="color: red;"></i> Ne réponds pas au message.</div>
            <?php } ?>
        </div>

        <hr />
    <?php } ?>

<?php } else { ?>

    <?php foreach ($users_get as $data) { ?>

        <?php $result_avatar = selectDB('*', 'users_avatar', 'user_id = "' . $data['id'] . '" ORDER BY id DESC', $db, '1'); ?>

        <div class="user_profil mb-3">
            <?php if ($result_avatar['validation'] == 1) { ?>
                <img src="https://love-and-heart.fr/assets/uploads/<?= $result_avatar['value']; ?>" />
            <?php } else { ?>
                <img src="https://love-and-heart.fr/assets/uploads/default.png" />
            <?php } ?>
            <div class="user_title"><a href="/profil/<?= $data['id'] ?>"><span><?= $data['prenom'] ?> (<?= age($data['naissance']); ?> ans)</span></a> <?php if ($data['premium'] == 2) { ?><span class="ms-0"><i class="fas fa-crown" style="color: #1d7691;"></i></span><?php } ?></div>
            <div class="user_status">
                <div class="chat_status2 <?= ($data['connected'] == 1) ? "connected" : "" ?><?= ($data['connected'] == 2) ? "disturb" : "" ?><?= ($data['connected'] == 3) ? "offline" : "" ?> me-1"></div><span><?= ($data['connected'] == 1) ? "En ligne" : "" ?><?= ($data['connected'] == 2) ? "Absent" : "" ?><?= ($data['connected'] == 3) ? "Hors ligne" : "" ?></span>
            </div>
            <?php if ($data['connected'] != 0) { ?>
                <div class="user_subtitle send_message" data-id="<?= $data['id'] ?>"><i class="far fa-comment-dots" style="color: #2bb412;"></i> Envoyer un message...</div>
            <?php } else { ?>
                <div class="user_subtitle_d"><i class="fas fa-times" style="color: red;"></i> Ne réponds pas au message.</div>
            <?php } ?>
        </div>

        <hr />
    <?php } ?>

<?php } ?>