
<?php
// Person.phpの読み込み
include_once("Person.php");

// Personを格納する配列の生成
$arrPersonList = [];

// Personデータの登録
$arrPersonList[] = new Person("佐藤太郎", "東京都", 20, "030123456");
$arrPersonList[] = new Person("山田花子", "青森県", 80, "0170123456");
$arrPersonList[] = new Person("木村 次郎", "京都府", 38, "0750123456");
?>

<?php include_once("header.php"); ?>

<h2>Lesson05 標準API</h2>
<p>Lesson04で作成したPersonクラスをListを使用して複数登録し、登録したデータを全て出力するプログラムを作成してください。</p>

<br/>

<pre>
<b>出力</b>
    <?php
    // Personの件数分ループ
    foreach ($arrPersonList as $List) {
        // Personのデータを一覧表示
        $List->printPerson();
        echo "<br/>";
    }
    ?>
</pre>

<?php
include_once("footer.php");
