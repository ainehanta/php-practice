<!DOCTYPE html>
<html>
<head>
  <meta charset="utf8" >
  <title>受付確認</title>
</head>
<body>
  <h1>受付確認</h1>

  <p>メール:
<?php
  $machigai = 0;
  if (isset($_POST['email']) && $_POST['email'] != '') {
    echo htmlspecialchars($_POST['email']);
  } else {
    echo "<em>未記入</em>";
    $machigai++;
  }
?>
</p>

<p>氏名:
<?php
  if (isset($_POST['name']) && $_POST['name'] != '') {
    echo htmlspecialchars($_POST['name']);
  } else {
    echo "<em>未記入</em>";
    $machigai++;
  }
?>
</p>

<p>備考:<br>
<?php
  if (isset($_POST['memo'])) {
    echo str_replace(array("\r\n", "\n", "\r"), '<br>', htmlspecialchars($_POST['memo']));
  } else {
    $_POST['memo'] = "";
  }
?>
</p>

<?php if ($machigai == 0) { ?>

<form method="post" action="apply3.php">
<input name="email" type="hidden" value="<?php echo $_POST['email']; ?>">
<input name="name" type="hidden" value="<?php echo $_POST['name']; ?>">
<input name="memo" type="hidden" value="<?php echo $_POST['memo']; ?>">
<p><input type="submit" value="これで申し込む"></p>
</form>

<?php } else { ?>

<p>間違いがあります。</p>

<?php } ?>
</body>
</html>
