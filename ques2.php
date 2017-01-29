<html>
<head>
  <meta charset="utf8" >
  <title>アンケート結果</title>
</head>
<body>
<h1>アンケート結果</h1>

結果は<a href="ques2.txt">ここ</a>

<?php
  $f = fopen("ques2.txt", "a");
  if ($_POST['namae'] != '' && $_POST['email'] != '') {
    $s = sprintf("%s, %s", $_POST['namae'], $_POST['email']);
    echo "<p>書き込みました。</p>";
  } else {
    echo "<p>未記入欄があります。</p>";
  }

  if ($_POST['weight'] != '' && $_POST['height'] != '') {
    $s = sprintf(",%10d, %10d", $_POST['height'], $_POST['weight']);
    fwrite($f, $s);
    echo "<p>書き込みました。</p>";
  }

  $s = sprintf("\n");
  fwrite($f, $s);
  fclose($f);
?>

</body>
</html>
