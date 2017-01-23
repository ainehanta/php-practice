<html>
<head>
  <meta charset="utf8" >
  <title>アンケート結果</title>
</head>
<body>
<h1>アンケート結果</h1>

結果は<a href="ques.txt">ここ</a>

<?php
  if ($_POST['weight'] != '' && $_POST['height'] != '') {
    $s = sprintf("%10d, %10d\n", $_POST['height'], $_POST['weight']);
    $f = fopen("ques.txt", "a");
    fwrite($f, $s);
    fclose($f);
    echo "<p>書き込みました。</p>";
  } else {
    echo "<p>未記入欄があります。</p>";
  }
?>

</body>
</html>
