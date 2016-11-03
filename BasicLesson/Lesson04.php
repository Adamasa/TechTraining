
<?php include_once("Person.php"); ?>

<?php include_once("header.php"); ?>

<h2>Lesson04 クラスとは</h2>
<p>下に示した個人クラス(Person)を作成し、Personに登録した情報をPersonクラスのprintメソッドで出力するプログラムを作成してください。</p>
<br/>
<?php $objPerson1 = new Person("菴占陸螟ｪ驛?", "譚ｱ莠ｬ驛ｽ", 20, "030123456"); ?>

<?php echo $objPerson1.print(); ?>

<?php include_once("footer.php"); ?>