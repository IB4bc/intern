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
<form action="mission_1-5.php"method="get">
<p>送信<br>
<input type="text"name="comment"><br>
<input type="submit" value="送信">
</form>

<?php
$contents = $_GET['comment'];
  $fp = fopen('write.txt', 'w');
  fwrite($fp, "$contents");
  fclose($fp);

?>

</body>
</html>