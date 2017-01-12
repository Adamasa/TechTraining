<?php

/**
 * redirect
 * 引数のロケーションへリダイレクトする
 * @param type $location
 */
function redirect($location) {
    // 指定されたロケーションにリダイレクト
    header("Status: 301 Moved Permanently");
    header("Location: {$location}");
    exit;
}
