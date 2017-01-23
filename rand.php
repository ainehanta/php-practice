<html>
<head>
  <meta charset="utf8" >
  <title>乱数</title>
</head>
<body>
<h1>乱数</h1>

<p>
  <?php
    $janken[0] = "グー"; $janken[1] = "チョキ"; $janken[2] = "パー";
    $r = (microtime() * 1000000) % 3;
    echo $janken[$r];
  ?>
</p>

<p>
  <?php
  srand(microtime() * 1000000);
  $janken[0] = "グー"; $janken[1] = "チョキ"; $janken[2] = "パー";
  echo $janken[rand(0, 2)];
?>
</p>

</body>
</html>
