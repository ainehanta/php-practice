<!DOCTYPE html>
<html>
<head>
  <meta charset="utf8" >
  <title>受付確認</title>
</head>
<body>
  <h1>受付確認</h1>

  <?php
  if (isset($_POST['email'], $_POST['name'], $_POST['memo'])) {
    $f = fopen("apply.csv", "a");
    fwrite($f, "\"{$_POST['email']}\",\"{$_POST['name']}\",\"{$_POST['memo']}\"\r\n");
    fclose($f);
    mb_send_mail(
      $_POST['email'],            // 宛先
      "申込",                     // 件名
      "メール: {$_POST['email']}\n氏名: {$_POST['name']}\n備考:\n{$_POST['memo']}\n", // 本文
      "From: あなたのメアド\nCc: あなたのメアド",
      "-f あなたのメアド");       // エラー宛先（Return-Path）
    echo "<p>受け付けました。</p>\n";
    $x = htmlspecialchars($_POST['email']);
    echo "<p>確認メールを $x に送りました。</p>\n";
  } else {
    echo "<p><a href=\"apply.php\">最初のページ</a>に戻ってやりなおしてください。</p>\n";
  }
?>
</body>
</html>
