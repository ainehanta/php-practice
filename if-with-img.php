<!DOCTYPE html>
<html>
<head>
  <meta charset="utf8" >
  <title>条件分岐</title>
</head>
<body>
<h1>条件分岐</h1>

<p>
<?php
  date_default_timezone_set('Asia/Tokyo');
  $h = date("H");
  if($h < 10) {
    echo '<img src="img/morning.png" alt="Good Morning.">';
  } elseif($h < 18) {
    echo '<img src="img/afternoon.png" alt="Good Afternoon.">';
  } else {
    echo '<img src="img/evening.png" alt="Good Evening.">';
  }
?>
</p>

</body>
</html>
