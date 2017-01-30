<?php
  // session_set_cookie_params(0, '/~okumura/');
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf8" >
  <title>クッキー</title>
</head>
<body>
  <h1>クッキー</h1>

  <p>あなたは今回このページに
  <?php
    if (isset($_SESSION['cnt'])) {
      echo $_SESSION['cnt'], " 回目ですね。";
    } else {
      $_SESSION['cnt'] = 1;
      echo "始めてですね（あるいはクッキーが保存されていませんね）。";
    }
    $_SESSION['cnt']++;
  ?>
  </p>
</body>
</html>
