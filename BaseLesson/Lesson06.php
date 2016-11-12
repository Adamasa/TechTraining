
<?php

// Person.phpの読み込み
include_once("Person.php");
// Engineer.phpの読み込み
include_once("Engineer.php");
// Employee.phpの読み込み
include_once("Employee.php");

// Personを格納する配列の生成
$arrPersonList = [];

// Personデータの登録
$arrPersonList[] = new Person("佐藤太郎", "東京都", 20, "030123456");
$arrPersonList[] = new Employee("山田花子", "青森県", 80, "総務部", "0170123456");
$arrPersonList[] = new Engineer("木村 次郎", "京都府", 38, "基本情報", "0750123456");

// Personの件数分ループ
foreach ($arrPersonList as $List) {
    // Personのデータを一覧表示
    $List->printPerson();
    print PHP_EOL;
}