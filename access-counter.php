<!DOCTYPE html>
<html>
<head>
  <meta charset="utf8" >
  <title>アクセスカウンタ</title>
</head>
<body>
<h1>アクセスカウンタ</h1>

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
?>

<p>あなたは <?php echo $c; ?> 人目のお客様です。</p>

</body>
</html>
