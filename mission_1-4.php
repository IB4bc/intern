<?php
$comment=$_GET['comment'];
echo $comment;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
</head>
<body>
<p>入力<br>
<form action="mission_1-4.php"method="get">
<input type="text" name="comment"></p>
<p><input type="submit" value="送信する"></p>

</form>
</body>
</html>