<?php

include '../config/config.php';
include '../config/fonctions.php';
include '../config/connexion.php';

date_default_timezone_set('Europe/Paris');
setlocale(LC_TIME, 'fra_fra');

if (!empty($_POST) && !empty($_SESSION['user_id'])) {

    $user = selectDB('*', 'users', 'id = "' . $_SESSION['user_id'] . '" ORDER BY id DESC', $db, '1');

    $db->query('INSERT INTO `chat_message`(
        `id`,
        `user_id`,
        `user_send`,
        `prenom`,
        `content`,
        `created_at`
        ) VALUES (
        NULL,
        "' . $_POST['user_id'] . '",
        "' . $_POST['user_send'] . '",
        "' . $user['prenom'] . '",
        "' . $_POST['content'] . '",
        "' . date('Y-m-d H:i:s') . '"
        )');

}