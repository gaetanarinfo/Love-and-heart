<?php
include '../config/config.php';
include '../config/fonctions.php';
include '../config/connexion.php';

$users = selectDB('*', 'users', 'id = "' . $_GET['id'] . '" AND id != "' . $_SESSION['user_id'] . '" ORDER BY created_at DESC, id DESC', $db, '1');
$result_avatar = selectDB('*', 'users_avatar', 'user_id = "' . $_GET['id'] . '" ORDER BY id DESC', $db, '1');
?>

<div class="user_profil">
    <?php if ($result_avatar['validation'] == 1) { ?>
        <img src="https://love-and-heart.fr/assets/uploads/<?= $result_avatar['value']; ?>" />
    <?php } else { ?>
        <img src="https://love-and-heart.fr/assets/uploads/default.png" />
    <?php } ?>
    <div class="user_title"><a href="/profil/<?= $users['id'] ?>"><span><?= $users['prenom'] ?> (<?= age($users['naissance']); ?> ans)</span></a> <?php if ($users['premium'] == 2) { ?><span class="ms-0"><i class="fas fa-crown" style="color: #1d7691;"></i></span><?php } ?></div>
    <div class="user_status">
        <div class="chat_status2 <?= ($users['connected'] == 1) ? "connected" : "" ?><?= ($users['connected'] == 2) ? "disturb" : "" ?><?= ($users['connected'] == 3) ? "offline" : "" ?> me-1"></div><span><?= ($users['connected'] == 1) ? "En ligne" : "" ?><?= ($users['connected'] == 2) ? "Absent" : "" ?><?= ($users['connected'] == 3) ? "Hors ligne" : "" ?></span>
    </div>
</div>