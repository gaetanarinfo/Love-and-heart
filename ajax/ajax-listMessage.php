<?php
include '../config/config.php';
include '../config/fonctions.php';
include '../config/connexion.php';

$users = selectDB('*', 'chat_message', 'user_send = "' . $_GET['id'] . '" AND user_id = "' . $_SESSION['user_id'] . '" ORDER BY created_at DESC, id DESC', $db, '*');
$userss = selectDB('*', 'chat_message', 'user_send = "' . $_GET['id'] . '" AND user_id != "' . $_SESSION['user_id'] . '" ORDER BY created_at DESC, id DESC', $db, '*');

?>

<div class="list_message">

    <?php if (count($users) != 0) { ?>

        <?php foreach ($users as $data) { ?>

            <div class="mt-2 mb-1"><i class="far fa-comment-dots me-2 tooltips" style="color: #2e38b1;" title="Posté <?= set_minutes($data['created_at']) ?>"></i><a href="/profil/<?= $data['id'] ?>"><span class="msg"><?= $data['prenom']; ?></span></a> : <?= $data['content']; ?></div>

        <?php } ?>

        <?php foreach ($userss as $data) { ?>

            <div class="mt-2 mb-1"><i class="far fa-comment-dots me-2 tooltips" style="color: #568f18;" title="Posté <?= set_minutes($data['created_at']) ?>"></i><a href="/profil/<?= $data['id'] ?>"><span class="msg"><?= $data['prenom']; ?></span></a> : <?= $data['content']; ?></div>

        <?php } ?>

    <?php } else { ?>

        <div class="mt-2 mb-1 text-center">Vous n'avez écrit aucun message.</div>

    <?php } ?>

</div>
