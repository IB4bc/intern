<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>情報入力画面</title>
</head>
<body>
<form action="mission_2-3.php"method="get">
<h1>情報入力フォーム</h1><br>
<p>名前<br>
<input type="text"name="namae"><br>
<p>コメント<br>
<input type="text"name="comment"><br>
<input type="submit" value="送信"><br>

<?php
$filename="kadai2-2.txt";
touch($filename);
$num=count(file($filename));
$num++;
$str=$num.'<>'.$_GET['namae'].'<>'.$_GET['comment'].
'<>'.date("Y/m/d H:i:s")."\n";

$fp = fopen($filename, "a");
  fwrite($fp,$str);
 fclose($fp);

$array=@file($filename,FILE_IGNORE_NEW_LINES);
foreach($array as $str){
$data=explode("<>",$str);
echo $data[0]." "."<名前>".$data[1]." "."<コメント>".
$data[2]." ".$data[3]." ".$data[4]."<br>";
}
?>
</form>
</body>
</html>