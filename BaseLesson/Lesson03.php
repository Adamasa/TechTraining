
<?php

/**
 * Lesson03 隣接交換法
 * 配列dataを隣接交換法で昇順にソートして結果を出力するプログラムを作成してください。
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

    // 最大要素数から$iでぶつかるまでループ
    for ($j = $intArrSize - 1; $i < $j; $j--) {

        // $data[$j]の値 < $data[$j-1]の値の場合は交換
        if ($data[$j] < $data[$j - 1]) {
            // $data[$j]の値を$tmpに退避
            $tmp = $data[$j];

            // $data[$j]に$data[$j-1]を格納
            $data[$j] = $data[$j - 1];

            // $data[$j-1]に$tmpを格納
            $data[$j - 1] = $tmp;
        }
    }
    // 途中経過出力
    print PHP_EOL . "Progress{$i} ";
    print_r($data);
}

// 最終結果出力
print PHP_EOL . "Result ";
print_r($data);
