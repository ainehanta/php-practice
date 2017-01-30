<!DOCTYPE html>
<html>
<head>
  <meta charset="utf8" >
  <title>Form</title>
</head>
<body>
<h1>Form</h1>

<?php
  if ($_POST['sessionid'] != session_id()) die("だめよ");

  if (isset($_POST['onamae']) && $_POST['onamae'] != '') {
    $x = htmlspecialchars($_POST['onamae']);
    echo "<p>こんにちは，$x さん。</p>";
  }
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<p>
  <label for="onamae">お名前:</label>
  <input id="onamae" name="onamae" size="20">
</p>

<input type="hidden" name="sessionid" value="<?php
  echo htmlspecialchars(session_id(), ENT_COMPAT, 'UTF-8');
?>">
</form>

</body>
</html>
