<?php
// ファイルを開く
$openFile = fopen('./data/data.text','r');


// ファイル内容を1行ずつ読み込んで出力
while($line = fgets($openFile)){
echo nl2br($line);
}
// \nがnl2brになる

// ファイルを閉じる
fclose($openFile);

// PHPのみ書く場合は、とじタグはいらないらしい。そういうもん


