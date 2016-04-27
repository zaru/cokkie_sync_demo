<?php
  if (isset($_GET['user_id'])) {
    $data = file('./data/lists.txt');
    $new_line = "";
    foreach ($data as $line) {
      list($email, $user_id_hash, $user_id) = explode("\t", rtrim($line));
      if ($_COOKIE['user_id_hash'] == $user_id_hash) {
        $new_line .= $email . "\t" . $user_id_hash . "\t" . $_GET['user_id'] . "\n";
      } else {
        $new_line .= $line;
      }
    }
    $fp = fopen('./data/lists.txt', 'w');
    fputs($fp, $new_line);
    fclose($fp);

    $fp = fopen('./data/logs.txt', 'a');
    fputs($fp, $_GET['user_id'] . "\t" . $_GET['url'] . "\n");
    fclose($fp);
  }

  header("Content-type: text/javascript");
?>
(function() {
  console.log('cookie = <?php echo serialize($_COOKIE); ?>');
})();
