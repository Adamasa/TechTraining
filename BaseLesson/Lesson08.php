<?php

/**
 * Lesson08 ��O����
 * 以下�?�要件を�?たすプログラ�?を作�?�してください�?
 *
 * ・コマンドライン引数を受け取りその値を数値に変換してListに追�?して�?く�??
 * ・全コマンドライン引数をListに登録した後�?�バブルソートを実施し�?�結果を表示する�?
 * ・数値に変換できな�?値があった�?�合�?�その値はソート対象としな�?�?
 */
// コマンドライン引数の要�?数
$intArgLen = Count($argv);

if (1 < $intArgLen) {
    // 引数があった�?��?
    var_dump($argv);

    // 数値格納�?��??
    $arrNumList = [];
    // 数値以外�?�納�?��??
    $arrAnotherList = [];

    // 引数�?ルー�?
    foreach ($argv as $strArg) {
        if (is_numeric($strArg)) {
            // 引数が数値�?った�?��?
            // 数値に変換して配�?�に格�?
            $arrNumList[] = intval($strArg);
        } else {
            // 引数が数値でなかった�?��?
            $arrAnotherList[] = $strArg;
        }
    }

    if (0 < count($arrNumList)) {
        $arrResultNumList = BubbleSort($arrNumList);

        print_r($arrResultNumList);
    } else {
        print "引数に数値がありませんでした�?";
    }
} else {
    // 引数がなかった�?��?
    print "引数がありません�?";
}

function BubbleSort($arrList) {
    // 要�?数回繰り返し
    for ($i = 0; $i < count($arrList); $i++) {
        // 要�?数-1回繰り返し
        for ($n = 1; $n < count($arrList); $n++) {
            // 隣接要�?を比�?し大小が�?なら�?�替える
            if ($arrList[$n - 1] > $arrList[$n]) {
                $temp = $arrList[$n];
                $arrList[$n] = $arrList[$n - 1];
                $arrList[$n - 1] = $temp;
            }
        }
    }
    return $arrList;
}
