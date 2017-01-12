<?php

// result.htmlにリダイレクト
header("Status: 301 Moved Permanently");
header("Location: ./result.php?" . $_SERVER['QUERY_STRING']);

// 終了
exit;
