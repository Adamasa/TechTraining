
<?php

// Person.phpの読み込み
include_once("Person.php");

// Personを格納する配列の生成
$arrPersonList = [];

// Personデータの登録
$arrPersonList[] = new Person("佐藤太郎", "東京都", 20, "030123456");
$arrPersonList[] = new Person("山田花子", "青森県", 80, "0170123456");
$arrPersonList[] = new Person("木村 次郎", "京都府", 38, "0750123456");

// Personの件数分ループ
foreach ($arrPersonList as $List) {
    // Personのデータを一覧表示
    $List->printPerson();
    print PHP_EOL;
}