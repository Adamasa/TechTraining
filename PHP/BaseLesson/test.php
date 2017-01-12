<?php

/*
 * Lesson07	Lesson06で作成したPerson、Employee、Engineerの複数種類のデータをまとめて管理できるプログラム
 * Author	: Yasui Yuu
 */
require 'Person.php';
require 'Employee.php';
require 'Engineer.php';
$classData = array();
do {
    echo "Select Menu 1.Add 2.Print 3.Search 4.End\n";
    echo "Please Input Nuber(1-4) : ";
    $menuno = fgets(STDIN);
    switch ($menuno) {
        /*
         * 追加機能
         */
        case 1:
            echo "Select Class	1.Person	2.Employee	3.Engineer	4.chancel\n";
            echo "Please Input Nuber(1-4) : ";
            $no = fgets(STDIN);
            echo "\n";
            switch ($no) {
                /*
                 * Personクラス追加
                 */
                case 1:
                    echo "Add Person Class\n";
                    echo "Please Input Name : ";
                    $name = fgets(STDIN);
                    $name = substr($name, 0, strlen($name) - 2);
                    echo "Please Input Address : ";
                    $address = fgets(STDIN);
                    $address = substr($address, 0, strlen($address) - 2);
                    echo "Please Input Age : ";
                    $age = fgets(STDIN);
                    $age = substr($age, 0, strlen($age) - 2);
                    echo "Please Input Telephone : ";
                    $telephone = fgets(STDIN);
                    $telephone = substr($telephone, 0, strlen($telephone) - 2);
                    $data = new Person($name, $address, $age, $telephone);
                    array_push($classData, $data);
                    break;
                /*
                 * Employeeクラス追加
                 */
                case 2:
                    echo "Add Employee Class\n";
                    echo "Please Input Name : ";
                    $name = fgets(STDIN);
                    $name = substr($name, 0, strlen($name) - 2);
                    echo "Please Input Age : ";
                    $age = fgets(STDIN);
                    $age = substr($age, 0, strlen($age) - 2);
                    echo "Please Input Section : ";
                    $section = fgets(STDIN);
                    $section = substr($section, 0, strlen($section) - 2);
                    echo "Please Input Telephone : ";
                    $telephone = fgets(STDIN);
                    $telephone = substr($telephone, 0, strlen($telephone) - 2);
                    $data = new Employee($name, $age, $section, $telephone);
                    array_push($classData, $data);
                    break;
                /*
                 * Engineerクラス追加
                 */
                case 3:
                    echo "Add Engineer Class\n";
                    echo "Please Input Name : ";
                    $name = fgets(STDIN);
                    $name = substr($name, 0, strlen($name) - 2);
                    echo "Please Input Address : ";
                    $address = fgets(STDIN);
                    $address = substr($address, 0, strlen($address) - 2);
                    echo "Please Input Age : ";
                    $age = fgets(STDIN);
                    $age = substr($age, 0, strlen($age) - 2);
                    echo "Please Input Skill : ";
                    $skill = fgets(STDIN);
                    $skill = substr($skill, 0, strlen($skill) - 2);
                    echo "Please Input Telephone : ";
                    $telephone = fgets(STDIN);
                    $telephone = substr($telephone, 0, strlen($telephone) - 2);
                    $data = new Engineer($name, $address, $age, $skill, $telephone);
                    array_push($classData, $data);
                    break;
                case 4:
                    echo "chancelled\n";
                    break;
            }
            break;
        /*
         * 表示機能
         */
        case 2:
            echo "All Print\n";
            foreach ($classData as $data) {
                $data->dataPrint();
            }
            break;
        /*
         * 検索機能
         */
        case 3:
            echo "Please Input Search Name : ";
            $sname = fgets(STDIN);
            $sname = substr($sname, 0, strlen($sname) - 2);
            $sflag = 0;
            foreach ($classData as $data) {
                if (strpos($data->getName(), $sname) !== false) {
                    echo $data->getName();
                    echo "\n";
                    $sflag = 1;
                }
            }
            if ($sflag == 0) {
                echo "Not Found\n";
            }
            echo"\n";
            break;
        case 4:
            break;
        default:
            echo ("!!!!!Please Input Nuber(1-4)!!!!!\n");
    }
} while ($menuno != 4);
/*
  C:\Users\y.yasui>php pleiades\workspace\php_training\Lesson07.php
  Select Menu 1.Add 2.Print 3.Search 4.End
  Please Input Nuber(1-4) : 1
  Select Class    1.Person        2.Employee      3.Engineer      4.chancel
  Please Input Nuber(1-4) : 1
  Add Person Class
  Please Input Name : Yasui yuu
  Please Input Address : tokyou
  Please Input Age : 10
  Please Input Telephone : 090
  Select Menu 1.Add 2.Print 3.Search 4.End
  Please Input Nuber(1-4) : 1
  Select Class    1.Person        2.Employee      3.Engineer      4.chancel
  Please Input Nuber(1-4) : 2
  Add Employee Class
  Please Input Name : yasui Yuu
  Please Input Age : 20
  Please Input Section : kinyuu
  Please Input Telephone : 080
  Select Menu 1.Add 2.Print 3.Search 4.End
  Please Input Nuber(1-4) : 1
  Select Class    1.Person        2.Employee      3.Engineer      4.chancel
  Please Input Nuber(1-4) : 3
  Add Engineer Class
  Please Input Name : Yasui Yuu
  Please Input Address : nagoya
  Please Input Age : 30
  Please Input Skill : php
  Please Input Telephone : 070
  Select Menu 1.Add 2.Print 3.Search 4.End
  Please Input Nuber(1-4) : 2
  All Print
  Name : Yasui yuu
  Address : tokyou
  Age : 10
  Telephone : 090
  Name : yasui Yuu
  Age : 20
  Section : kinyuu
  Telephone : 080
  Name : Yasui Yuu
  Address : nagoya
  Age : 30
  Skill : php
  Telephone : 070
  Select Menu 1.Add 2.Print 3.Search 4.End
  Please Input Nuber(1-4) : 3
  Please Input Search Name : yasui
  yasui Yuu
  Select Menu 1.Add 2.Print 3.Search 4.End
  Please Input Nuber(1-4) : 3
  Please Input Search Name : Yuu
  yasui Yuu
  Yasui Yuu
  Select Menu 1.Add 2.Print 3.Search 4.End
  Please Input Nuber(1-4) : 3
  Please Input Search Name : YASUI
  Not Found
  Select Menu 1.Add 2.Print 3.Search 4.End
  Please Input Nuber(1-4) : 4
  C:\Users\y.yasui>
 */
?>