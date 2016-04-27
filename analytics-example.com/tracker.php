<?php
  if (!isset($_COOKIE['user_id_3rd'])) {
    $user_id_hash = uniqid();
    setcookie("user_id_3rd", $user_id_hash);
  }
header("Content-type: image/gif");
echo base64_decode('R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==');
