
<?php

// Person.phpの読み込み
include_once("Person.php");

// Personデータの登録
$objPerson1 = new Person("佐藤太郎", "東京都", 20, "030123456");
$objPerson2 = new Person("山田花子", "青森県", 80, "0170123456");
$objPerson3 = new Person("木村 次郎", "京都府", 38, "0750123456");

$objPerson1->printPerson();
print PHP_EOL;
$objPerson2->printPerson();
print PHP_EOL;
$objPerson3->printPerson();
