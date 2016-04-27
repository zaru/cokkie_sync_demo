<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, user-scalable=0" name="viewport" />
</head>
<body>
  <h1>a-example.com</h1>
  <ul>
    <?php for($i=1;$i<5;$i++): ?>
    <li><a href="page.php?id=<?php echo $i; ?>">page <?php echo $i; ?></a></li>
    <?php endfor; ?>
  </ul>

  <h2>zarudotへ送信</h2>
  <form action="http://analytics-example.com:10002/form.php" method="post">
    Email: <input type="text" name="email" value="">
    <input type="submit">
  </form>

  <script src="http://analytics-example.com:10002/sdk.js"></script>

</body>
</html>
