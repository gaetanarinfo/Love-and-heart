<?php
include '../config/config.php';
include '../config/fonctions.php';
include '../config/connexion.php';
$users_count = selectDB('*', 'users', 'connected != 3 AND zen != 1 AND id != "' . $_SESSION['user_id'] . '" ORDER BY created_at DESC, id DESC', $db, '*');
echo count($users_count); ?>