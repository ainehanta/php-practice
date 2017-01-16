<html>
<head>
  <meta charset="utf8" >
  <title>習作</title>
</head>
<body>
<h1>List of Contents</h1>

<?php
foreach(glob('*.php') as $file){
  if(is_file($file)){
    $file = htmlspecialchars($file);
    echo "<div><a href=\"$file\">$file</a></div>";
  }
}
?>

</body>
</html>
