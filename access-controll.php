<html>
<head>
  <meta charset="utf8" >
  <title>アクセス制御</title>
</head>
<body>
<h1>アクセス制御</h1>

<p>
<?php
  $x = $_SERVER['REMOTE_ADDR'];
  echo "あなたのIPアドレス $x は";
  if (strncmp($x, "172.17.", 7) == 0) {
    echo "学内のものです";
  } else {
    echo "学外のものです";
  }
?>
</p>

</body>
</html>
