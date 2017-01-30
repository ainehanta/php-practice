<html>
<head>
  <meta charset="utf8" >
  <title>オンライン投票結果</title>
</head>
<body>
<h1>オンライン投票結果</h1>

<?php
  $fp = fopen("vote.txt", "r+");
  fscanf($fp, "%d,%d,%d,%d", $count[0], $count[1], $count[2], $count[3]);
  if (isset($_POST['vote'])) {
    $v = $_POST['vote'];
    if ($v >=0 && $v < 4) $count[$v]++;
    $r = sprintf("%d,%d,%d,%d", $count[0], $count[1], $count[2], $count[3]);
    fseek($fp, 0);
    fputs($fp, $r);
  }
  fclose($fp);
  $m = 30;
  for ($i = 0; $i < 4; $i++) {
    if ($count[$i] > $m) $m = $count[$i];
  }
  if ($m != 0) {
    for ($i = 0; $i < 4; $i++) $width[$i] = (int)($count[$i] * 300 / $m);
  }
?>

<table>
  <tr>
    <td>小泉首相</td>
    <td align="right"><?php echo $count[0] ?>票</td>
    <td><div style="width:<?php echo $width[0] ?>px; height:20px; background-color:blue"></div></td>
  </tr>
  <tr>
    <td>ビンラディン</td>
    <td align="right"><?php echo $count[1] ?>票</td>
    <td><div style="width:<?php echo $width[1] ?>px; height:20px; background-color:gray"></div></td>
  </tr>
  <tr>
    <td>愛子さま</td>
    <td align="right"><?php echo $count[2] ?>票</td>
    <td><div style="width:<?php echo $width[2] ?>px; height:20px; background-color:red"></div></td>
  </tr>
  <tr>
    <td>その他</td>
    <td align="right"><?php echo $count[3] ?>票</td>
    <td><div style="width:<?php echo $width[3] ?>px; height:20px; background-color:green"></div></td>
  </tr>
</table>

</body>
</html>
