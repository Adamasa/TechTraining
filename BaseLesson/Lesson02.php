<?php

/**
 * Lesson02 逐次決定法
 * 配列dataを逐次決定法で昇順にソートして結果を出力するプログラムを作成してください。
 */
// ★ ここから----------
// 1～10までの整数が格納された配列data
$data = range(1, 10);

// dataの中身をランダムに配置
shuffle($data);

// 出力
print "Initialize ";
print_r($data);
// ★ ----------ここまでの部分は変更しないでください。
// 配列dataの要素数を取得
$intArrSize = count($data);

// 0から要素数分ループ
for ($i = 0; $i < $intArrSize - 1; $i++) {

    // $iから要素数までループ
    for ($j = $i; $j < $intArrSize; $j++) {

        // $data[$j]の値 <= $data[$i]の値の場合は交換
        if ($data[$j] <= $data[$i]) {
            // $data[$i]の値を$tmpに退避
            $tmp = $data[$i];

            // $data[$i]に$data[$j]を格納
            $data[$i] = $data[$j];

            // $data[$j]に$tmpを格納
            $data[$j] = $tmp;
        }
    }
    // 途中経過出力
    print PHP_EOL . "Progress{$i} ";
    print_r($data);
}

// 最終結果出力
print PHP_EOL . "Result ";
print_r($data);
