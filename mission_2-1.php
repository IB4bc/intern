<?php
$namae=$_GET['namae'];
echo $namae;
$comment=$_GET['comment'];
echo $comment;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>情報入力画面</title>
</head>
<body>
<form action="mission_2-1.php"method="get">
<h1>情報入力フォーム</h1><br>
<p>名前<br>
<input type="text"name="namae"><br>
<p>コメント<br>
<input type="text"name="comment"><br>
<input type="submit" value="送信">
</form>
</body>
</html>