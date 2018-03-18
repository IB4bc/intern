<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
</head>
<body>
<form action="mission_1-6.php"method="get">
<p>送信<br>
<input type="text"name="comment"><br>
<input type="submit" value="送信">
</form>

<?php
$comment = $_GET['comment'];
$filename='kadai6.txt';
if ($comment) {
$fp = fopen($filename, 'a');
  fwrite($fp, "$comment".PHP_EOL);
 fclose($fp);
}
?>


</body>
</html>