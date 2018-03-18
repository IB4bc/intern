<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>情報入力画面</title>
</head>
<body>
<form action="mission_2-2.php"method="get">
<h1>情報入力フォーム</h1><br>
<p>名前<br>
<input type="text"name="namae"><br>
<p>コメント<br>
<input type="text"name="comment"><br>
<input type="submit" value="送信">

<?php
$res="kadai2-2.txt";
touch($res);
$str=count(file("kadai2-2.txt")).'<>'.$_GET['namae'].'<>'.$_GET['comment'].
'<>'.date("Y/m/d H:i:s")."\n";
$fp = fopen($res, "a");
  fwrite($fp,$str);
 fclose($fp);
?>
</form>
</body>
</html>