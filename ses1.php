<?php
  // session_set_cookie_params(0, '/~okumura/');
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf8" >
  <title>クッキー2</title>
</head>
<body>
  <h1>クッキー2</h1>

  <form action="ses1.php" method="post">
  <p>メッセージ： <input name="msg"></p>
  </form>

  <?php
    if (!isset($_SESSION['msgs'])) {
      $_SESSION['msgs'] = '';
    }
    if (isset($_POST['msg'])) {
      $_SESSION['msgs'] .= $_POST['msg'] . "\n";
    }
    if (isset($_SESSION['msgs'])) {
      echo "<p>過去のメッセージ：</p>\n";
      echo "<pre>\n";
      echo htmlspecialchars($_SESSION['msgs']);
      echo "</pre>\n";
    }
  ?>
</body>
</html>
