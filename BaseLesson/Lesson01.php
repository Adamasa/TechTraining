
<?php include_once("header.php"); ?>

<h2>Lesson01 3の倍数と3がつく値の出力</h2>
<p>1から100までの整数のうち、3の倍数と3がつく値を出力するプログラムを作成してください。</p>
<br/>

<?php
// 検索対象
$strPattern = '/3/';

// 出力文字列
$strPrintValue = '';

// 1から100までの整数でループ
for ($intCounter = 1; $intCounter < 100; $intCounter++) {
    // 3の倍数または3がつく値の場合
    if ($intCounter % 3 == 0 or preg_match($strPattern, $intCounter)) {
        // 出力文字列のセット
        $strPrintValue = $strPrintValue . $intCounter . ', ';
    }
}

// 出力
print Left($strPrintValue, strlen($strPrintValue) - 2);

function Left($strText, $intLength) {
    // 指定文字列($strText)を左から指定文字数分($intLength)だけ切り抜く
    return substr($strText, 0, $intLength);
}
?>

<?php include_once("footer.php"); ?>
