<?php

/**
 * Lesson08 例外処理
 * 以下の要件を満たすプログラムを作成してください。
 *
 * ・コマンドライン引数を受け取りその値を数値に変換してListに追加していく。
 * ・全コマンドライン引数をListに登録した後、バブルソートを実施し、結果を表示する。
 * ・数値に変換できない値があった場合、その値はソート対象としない。
 */
// コマンドライン引数の要素数
$intArgLen = Count($argv);

if (1 < $intArgLen) {
    // 引数があった場合
    var_dump($argv);

    // 数値格納配列
    $arrNumList = [];
    // 数値以外格納配列
    $arrAnotherList = [];

    // 引数分ループ
    foreach ($argv as $strArg) {
        if (is_numeric($strArg)) {
            // 引数が数値だった場合
            // 数値に変換して配列に格納
            $arrNumList[] = intval($strArg);
        }
    }

    if (0 < count($arrNumList)) {
        $arrResultNumList = BubbleSort($arrNumList);

        print PHP_EOL . "ソート結果 ";
        print_r($arrResultNumList);
    } else {
        print "引数に数値がありませんでした。";
    }
} else {
    // 引数がなかった場合
    print "引数がありません。";
}

function BubbleSort($arrList) {
    // 要素数回繰り返し
    for ($i = 0; $i < count($arrList); $i++) {
        // 要素数-1回繰り返し
        for ($n = 1; $n < count($arrList); $n++) {
            // 隣接要素を比較し大小が逆なら入れ替える
            if ($arrList[$n - 1] > $arrList[$n]) {
                $temp = $arrList[$n];
                $arrList[$n] = $arrList[$n - 1];
                $arrList[$n - 1] = $temp;
            }
        }
        // 途中経過出力
        print PHP_EOL . "途中経過{$i} ";
        print_r($arrList);
    }
    return $arrList;
}
