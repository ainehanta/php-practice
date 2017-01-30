<?php
  // session_set_cookie_params(0, '/~okumura/php/');
  session_start();

  // 本来は別ファイルでやるべき
  password_hash("aaaa", 'sha256', ['salt' => "thisissalt"])
  //
  // function hash_all($arr) {
  //   foreach($arr as $key => $val) {
  //     $arr[$key] = hash_and_salt($val)
  //   }
  // }
  $users = array('hoge' => 'geho', 'guest' => 'guest');

  if (isset($_POST['username']) && isset($_POST['password'])) {
    if (isset($users[$_POST['username']]) && $users[$_POST['username']] == $_POST['password']) {
      $_SESSION['username'] = $_POST['username'];
    } elseif (isset($_SESSION['username'])) {
      unset($_SESSION['username']);
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf8" >
  <title>ログイン</title>
</head>
<body>
  <h1>ログイン</h1>

  <?php if (!isset($_SESSION['username'])) { ?>

  <form action="logins.php" method="post">
  <p>Username: <input name="username" size="20"></p>
  <p>Password: <input type="password" name="password" size="20"></p>
  <p><input type="submit" value="ログイン"></p>
  </form>

  <p>ユーザ名 hoge パスワード geho，またはユーザ名・パスワードともに guest で入れます。</p>

  <?php } else { ?>

  <p>あなたは <?php echo htmlspecialchars($_SESSION['username']) ?> としてログインしています。</p>

  <form action="logins.php" method="post">
  <p>
  <input type="hidden" name="username" value="dummy">
  <input type="hidden" name="password" value="dummy">
  <input type="submit" value="ログアウト">
  </p>
  </form>

  <?php } ?>

</body>
</html>
