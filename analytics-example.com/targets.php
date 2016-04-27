<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, user-scalable=0" name="viewport" />
</head>
<body>
  <h2>ユーザリスト</h2>
  <table border="1">
    <tr>
      <th>Email</th>
      <th>user_id_hash</th>
      <th>user_id</th>
    </tr>

<?php
$data = file('./data/lists.txt');
foreach ($data as $line) {
  list($email, $user_id_hash, $user_id) = explode("\t", rtrim($line));
?>
    <tr>
      <td><?php echo $email; ?></td>
      <td><?php echo $user_id_hash; ?></td>
      <td><?php echo $user_id; ?></td>
    </tr>
<?php
}
?>
  </table>
  <h2>全ユーザの行動リスト</h2>
  <table border="1">
    <tr>
      <th>user_id</th>
      <th>url</th>
    </tr>

<?php
$data = file('./data/logs.txt');
foreach ($data as $line) {
  list($user_id, $url) = explode("\t", rtrim($line));
?>
    <tr>
      <td><?php echo $user_id; ?></td>
      <td><?php echo $url; ?></td>
    </tr>
<?php
}
?>
  </table>
</body>
</html>
