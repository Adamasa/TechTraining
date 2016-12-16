<?php
// 汎用機能の読み込み
require_once 'utility.php';

session_start();

if (!isset($_SESSION['id'])) {
    redirect("./login.html");
}
?>
<html>
    <head>
        <title>トップページ</title>
        <link rel="stylesheet" type="text/css" href="wiki.css">
    </head>
    <body>
        <h1>トップ</h1>
        <div>ようこそ、ログインID「<?= $_SESSION['id'] ?>」さん</div>
        <form name="myForm" action="logout.php">
            <input type="submit" value="ログアウト">
        </form>
</html>
