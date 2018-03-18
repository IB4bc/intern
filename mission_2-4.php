<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>情報入力画面</title>
</head>
<form action="mission_2-4.php" method="post" >
<h1>情報入力フォーム</h1><br>
<p>名前<br>
<input type="text" name="name"><br>
<p>コメント<br>
<input type="text" name ="comment" cols="50" rows="5"><br>
<input type="submit" value="投稿"><br>
<p>削除対象番号<br>
<input type="text" name="delete"><br>
<input type="submit" value="削除"><br>


<?php
        $filename = "kadai2-2.txt";
        touch($filename);
        $name = $_POST["name"];
        $comment = $_POST["comment"];
    if (!empty($name) && !empty($comment)) {
        $number = count(file("kadai2-2.txt"));
        $date = date("Y/m/d H:i:s");
        $number++;
        $str=$number.'<>'.$name.'<>'.$comment.'<>'.$date."\n";
        $current = file_get_contents($filename); // ファイルをオープンして既存のコンテンツを取得
        file_put_contents($filename, $str, FILE_APPEND | LOCK_EX);


        $array=@file($filename,FILE_IGNORE_NEW_LINES);
        foreach($array as $str){
        $data=explode("<>",$str);
        echo $data[0]." "."<名前>".$data[1]." "."<コメント>".
        $data[2]." ".$data[3]."<br>";

     }
  }

if (isset($_POST["delete"])) {
    $delete = $_POST["delete"];
    $delCon = file($filename);

    $fp = fopen($filename, "w");
    for ($j = 0; $j < count($delCon); $j++) {
        $delDate = explode("<>", $delCon[$j]);
        array_splice($delDate,$j,1);

        if ($delDate[0] != $delete) {
$b=fopen($filename,"a");
            fwrite($b, $delCon[$j]);
        } elseif ($delDate[0] == $delete) {
            fwrite($b, "消去しました。\n");
        }
    }
    fclose($fp);
}
?>


</form>
</body>
</html>