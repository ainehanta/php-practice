<html>
<head>
  <meta charset="utf8" >
  <meta http-equiv="refresh" content="1" >
  <title>What time is it now?</title>
</head>
<body>
<h1>いま何時？</h1>

<p>いま
<?php
  date_default_timezone_set('Asia/Tokyo');
  echo date("Y 年 m 月 d 日 H 時 i 分 s 秒");
?>
です。</p>
</body>
</html>
