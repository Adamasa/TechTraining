
<?php include_once("Person.php"); ?>

<?php include_once("header.php"); ?>

<h2>Lesson04 �N���X�Ƃ�</h2>
<p>���Ɏ������l�N���X(Person)���쐬���APerson�ɓo�^��������Person�N���X��print���\�b�h�ŏo�͂���v���O�������쐬���Ă��������B</p>
<br/>
<?php $objPerson1 = new Person("佐藤太�?", "東京都", 20, "030123456"); ?>

<?php echo $objPerson1.print(); ?>

<?php include_once("footer.php"); ?>