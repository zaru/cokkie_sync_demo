<?php
  $user_id_hash = uniqid();
  $fp = fopen('./data/lists.txt', 'a');
  fputs($fp, $_POST['email'] . "\t" . $user_id_hash . "\n");
  fclose($fp);

  setcookie("user_id_hash", $user_id_hash);

  header("Location: http://a-example.com:10000/");
