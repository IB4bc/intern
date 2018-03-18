<meta charset="utf-8">

<?php
//読み込むファイル名の指定
$file_name="kadai6.txt";
//ファイルを全て配列に入れる
$ret_array=file($file_name);
touch($file_name);
$num=count(file($file_name));
$num++;
$str=$num."\n";

$array=@file($file_name,FILE_IGNORE_NEW_LINES);
foreach($array as $str){
$data=explode($num);
echo $str."<br>";
}

?>


</body>
</html>