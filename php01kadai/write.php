<?php
// ファイルに書き込み
$name1 =$_POST['name1'];
$name2 =$_POST['name2'];
$mail =$_POST['mail'];
$answer =$_POST['answer1'];
$time = date('Y-m-d H:i:s');

// aはファイルがないときに勝手に作ってくれる
$file = fopen('./data/data.text','a');
        fwrite($file, $name1 . '/'.$name2 . '/' . $mail . '/' . $answer .'/' .$time.'/'."\n" );
        fclose($file);
// data.testの中に更新時間が記録される
// バックスラッシュn するおまじない
//文字作成

?>


<html>

<head>
    <meta charset="utf-8">
    <title>回答完了</title>
</head>

<body>

    <h1>Thank You</h1>
    <p>次回のぬいぐるみZOOMパーティーの参加予約を受け付けました。</p>
    <img src="img/thankyou.jpeg">

    <ul>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>



