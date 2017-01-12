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

function execute_select_all($table = null) {
    if (isset($table)) {
        $connect = pg_connect("host=localhost port=5432 user=postgres password=pass");

        $esTable = pg_escape_string($table);
        $query = "SELECT * FROM {$esTable}";
        $result = pg_query($connect, $query);
        if (!$result) {
            echo "An error occurred.\n";
            exit;
        }
        // 全てのデータを配列で得る
        $arr = pg_fetch_all($result);

        return $arr;
    }

    return null;
}
