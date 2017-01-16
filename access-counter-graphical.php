<html>
<head>
  <meta charset="utf8" >
  <title>アクセスカウンタ（Graphical）</title>
</head>
<body>
<h1>アクセスカウンタ（Graphical）</h1>

<?php
  if(!file_exists('count.txt')) {
    file_put_contents('count.txt', '0');
  }

  $f = fopen("count.txt", "r+");
  $c = fgets($f, 10);
  $c = $c + 1;
  fseek($f, 0);
  fputs($f, $c);
  fclose($f);

  $c3 = ($c / 1000) % 10;
  $c2 = ($c /  100) % 10;
  $c1 = ($c /   10) % 10;
  $c0 =  $c         % 10;
?>

<p>
あなたは
<?php
  echo "<img src=\"img/$c3.jpg\" alt=\"$c3\">";
  echo "<img src=\"img/$c2.jpg\" alt=\"$c2\">";
  echo "<img src=\"img/$c1.jpg\" alt=\"$c1\">";
  echo "<img src=\"img/$c0.jpg\" alt=\"$c0\">";
?>
人目のお客様です。
</p>

</body>
</html>
