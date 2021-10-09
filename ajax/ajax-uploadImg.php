<?php

include '../config/config.php';
include '../config/fonctions.php';
include '../config/connexion.php';

date_default_timezone_set('Europe/Paris');
setlocale(LC_TIME, 'fra_fra');


$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
$path =  __DIR__ . '/../assets/uploads/'; // upload directory

if ($_FILES['photo']) {
   $img = $_FILES['photo']['name'];
   $tmp = $_FILES['photo']['tmp_name'];

   // get uploaded file's extension
   $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

   // can upload same photo using rand function
   $final_image = rand(1000, 1000000) . '_' . date('Y_m_d') . $img;

   // check's valid format
   if (in_array($ext, $valid_extensions)) {
      $path = $path . strtolower($final_image);

      if (move_uploaded_file($tmp, $path)) {

         echo $final_image;

         if (!empty($_SESSION['user_id'])) {

            $db->query('INSERT INTO `users_avatar`(
            `id`,
            `user_id`,
            `value`,
            `created_at`
            ) VALUES (
            NULL,
            "' . $_SESSION['user_id'] . '",
            "' . $final_image . '",
            "' . date('Y-m-d H:i:s') . '"
            )');

         }else{

            $verif_users = selectDB('*', 'users', '1 ORDER BY id DESC', $db, '1');

            $count = $verif_users['id'] + 1;

            $db->query('INSERT INTO `users_avatar`(
               `id`,
               `user_id`,
               `value`,
               `created_at`
               ) VALUES (
               NULL,
               "' . $count . '",
               "' . $final_image . '",
               "' . date('Y-m-d H:i:s') . '"
               )');

         }

      }
   } else {
      echo 'invalid';
   }
}
