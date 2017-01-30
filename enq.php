<!DOCTYPE html>
<html>
<head>
  <meta charset="utf8" >
  <title>アンケート</title>
</head>
<body>
  <h1>アンケート</h1>

  <form action="ques.php" method="post">
    <p><label>身長:</label><input name="height" size="5">cm</p>
    <p><label>体重:</label><input name="weight" size="5">kg</p>
    <p>
      <input type="submit" value="送る">
      <input type="reset" value="クリア">
    </p>
  </form>

  <form action="ques2.php" method="post">
    <fieldset>
      <legend>必須項目</legend>
      <p><label>氏名</label>_<input name="namae"></p>
      <p><label>メール</label><input name="email"></p>
    </fieldset>
    <fieldset>
      <legend>任意項目</legend>
      <p><label>身長</label><input name="height" size="5"> cm</p>
      <p><label>体重</label><input name="weight" size="5"> kg</p>
    </fieldset>
    <p>
      <input type="submit" value="送る">
      <input type="reset" value="クリア">
    </p>
    </form>
</body>
</html>
