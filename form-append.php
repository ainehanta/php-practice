<html>
<head>
  <meta charset="utf8" >
  <title>Form</title>
</head>
<body>
<h1>Form</h1>

<?php
  if ($_POST['sessionid'] != session_id()) die("だめよ");

  if (isset($_POST['message']) && $_POST['message'] != "") {
    $f = fopen("message.txt", "a");
    fwrite($f, htmlspecialchars($_POST['message']) . "\n");
    fclose($f);
  }
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<p>
  <label>メッセージ:</label>
  <input name="message" size="60">
</p>
</form>

<pre>
<?php readfile("message.txt"); ?>
</pre>


</body>
</html>
