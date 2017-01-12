
<?php

/**
 * Lesson04 クラスとは
 *
 * 下に示した個人クラス(Person)を作成し、Personに登録した情報をPersonクラスのprintメソッドで出力するプログラムを作成してください。
 *
 * 出力例
 *
 * 氏名：佐藤太郎
 * 住所：東京都
 * 年齢：20
 * 電話番号：030123456
 *
 * 氏名：山田花子
 * 住所：青森県
 * 年齢：80
 * 電話番号：0170123456
 *
 * 氏名：木村 次郎
 * 住所：京都府
 * 年齢：38
 * 電話番号：0750123456
 */
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
