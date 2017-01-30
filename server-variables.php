<!DOCTYPE html>
<html>
<head>
  <meta charset="utf8" >
  <title>サーバー変数</title>
</head>
<body>
<h1>サーバー変数</h1>

<section>
<h2>HTTP_REFERER</h2>
<p>
<?php
  if (isset($_SERVER['HTTP_REFERER'])) {
    $x = htmlspecialchars($_SERVER['HTTP_REFERER']);
    echo "あなたは $x のリンクをたどって来ましたね";
  } else {
    echo "あなたはリンクをたどらずにこのページに来ましたね";
  }
?>
</p>
</section>

<section>
<h2>HTTP_USER_AGENT</h2>
<p>
<?php
  if (isset($_SERVER['HTTP_USER_AGENT'])) {
    $x = htmlspecialchars($_SERVER['HTTP_USER_AGENT']);
    echo "あなたのブラウザは $x ですね";
  } else {
    echo "あなたのブラウザは名無しですね";
  }
?>
</p>
</section>

<?php
  if (isset($_SERVER['HTTP_REFERER'])) {
    echo '<a href="', htmlspecialchars($_SERVER['HTTP_REFERER']), '">［戻る］</a>';
  }
?>


</body>
</html>
