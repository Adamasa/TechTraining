<?php

// MyListManager.phpの読み込み
include_once("MyListManager.php");

$ListManager = new MyListManager();

$ListManager->AddLast(1);
$ListManager->AddLast(3);
$ListManager->AddLast(5);
$ListManager->AddLast(4);
$ListManager->listPrint();

$ListManager->AddIndex(2, 1);
$ListManager->listPrint();

$ListManager->remove(3);
$ListManager->listPrint();
