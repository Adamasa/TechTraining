<?php

// 汎用機能の読み込み
require_once 'utility.php';

// ロケーションの定義
$top_location = "./top.php";
$login_location = "./login.html";


// セッションが有効で、かつセッションが存在する場合
if (session_status() == PHP_SESSION_ACTIVE) {
    // top画面へ遷移
    redirect($top_location);

// それ以外
} else {
    // sessionを有効化
    session_start();

    // 入力されたIDとパスワードを取得
    $id = filter_input(INPUT_POST, 'id');
    $pass = filter_input(INPUT_POST, 'pass');

    if (authentication($id, $pass)) {
        // 認証に成功した場合
        // session情報書き込み
        $_SESSION['id'] = $id;
        $_SESSION['pass'] = $pass;

        // top画面へ遷移
        redirect($top_location);
    } else {
        // 認証に失敗した場合
        // login画面へ遷移
        redirect($login_location);
    }
}

/**
 * authentication
 * 引数のIDとパスワードで認証を行う
 * @param type $id
 * @param type $pass
 * @return type
 */
function authentication($id, $pass) {
    // IDとパスワードの両方があればtrueを返す
    return $id && $pass;
}
