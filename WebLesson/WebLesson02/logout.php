<?php

// 汎用機能の読み込み
require_once 'utility.php';

// sessionの再開
session_start();

// セッションを削除
$_SESSION = array();

// セッション ファイルを削除
session_destroy();

// セッション終了
session_write_close();

// login画面へ遷移
redirect("./login.html");
