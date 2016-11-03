
<?php
// Person.phpの読み込み
include_once("Person.php");
// Engineer.phpの読み込み
include_once("Engineer.php");
// Employee.phpの読み込み
include_once("Employee.php");

// Personを格納する配列の生成
$arrPersonList = [];

// Personデータの登録
$arrPersonList[] = new Person("佐藤太郎", "東京都", 20, "030123456");
$arrPersonList[] = new Employee("山田花子", "青森県", 80, "総務部", "0170123456");
$arrPersonList[] = new Engineer("木村 次郎", "京都府", 38, "基本情報", "0750123456");
?>

<?php include_once("header.php"); ?>

<h2>Lesson06 継承</h2>
<p>
    Lesson04、Lesson05で作成したプログラムを修正して、社員クラス、技術者クラスを追加し<br/>
    Listを使用して登録、printメソッドで全て表示するプログラムを作成してください。<br/>
    各クラスの定義は以下を参照してください。
</p>

<div>
    <div style="float:left;width:300px">
        <b>社員クラス</b>
        <p>クラス名 ： Employee</p>
        <table border="1">
            <thead><tr><th>フィールド名</th><th>データ型</th><th>意味</th></tr></thead>
            <tbody>
                <tr><td>name</td><td>String</td><td>氏名</td></tr>
                <tr><td>age</td><td>int</td><td>年齢</td></tr>
                <tr><td>section</td><td>String</td><td>所属部署名</td></tr>
                <tr><td>telephone</td><td>String</td><td>電話番号</td></tr>
        </table>
    </div>

    <div>
        <b>技術者クラス</b>
        <p>クラス名 ： Engineer</p>
        <table border="1">
            <thead><tr><th>フィールド名</th><th>データ型</th><th>意味</th></tr></thead>
            <tbody>
                <tr><td>name</td><td>String</td><td>氏名</td></tr>
                <tr><td>address</td><td>String</td><td>住所</td></tr>
                <tr><td>age</td><td>int</td><td>年齢</td></tr>
                <tr><td>skill</td><td>String</td><td>保有技術</td></tr>
                <tr><td>telephone</td><td>String</td><td>電話番号</td></tr>
            </tbody>
        </table>
    </div>
</div>

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
