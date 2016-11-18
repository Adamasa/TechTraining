
<?php

/**
 * Lesson07 クラス総合確認
 * Lesson06で作成したPerson、Employee、Engineerの複数種類のデータをまとめて管理できるプログラムを作成してください。
 */
//header('Content-Type: text/html; charset=UTF-8');
// Person.phpの読み込み
include_once("Person.php");
// Engineer.phpの読み込み
include_once("Engineer.php");
// Employee.phpの読み込み
include_once("Employee.php");

$CONST_PERSON_LIST = array("氏名", "住所", "年齢", "電話番号");
$CONST_EMPLOYEE_LIST = array("氏名", "住所", "年齢", "所属部署名", "電話番号");
$CONST_ENGINEER_LIST = array("氏名", "住所", "年齢", "スキル", "電話番号");



// Personを格納する配列の生成
$arrPersonList = [];

// Personデータの登録
$arrPersonList[] = new Person("佐藤太郎", "東京都", 20, "030123456");
$arrPersonList[] = new Employee("山田花子", "青森県", 80, "総務部", "0170123456");
$arrPersonList[] = new Engineer("木村 次郎", "京都府", 38, "基本情報", "0750123456");

do {
    // 機能の選択
    print "機能を選択してください。" . PHP_EOL;
    print "[1:追加 2:一覧表示 3:検索 その他:終了] :";
    $strFunction = trim(fgets(STDIN));

    if ($strFunction <= 0 or 4 <= $strFunction) {
        // 指定文字以外
        print "プログラムを終了します。" . PHP_EOL;
        break;
    } elseif (1 <= $strFunction and $strFunction <= 3) {
        // 機能の指定
        switch ($strFunction) {
            // 追加
            case 1 :
                // 役職の指定
                print "追加する種類を選択してください。" . PHP_EOL;
                print "[1:Person 2:Employee 3:Engineer] :";
                $strClass = trim(fgets(STDIN));

                if ($strClass <= 0 or 4 <= $strClass) {
                    // 指定文字以外
                    print "入力された値が不正です。" . PHP_EOL;
                    print PHP_EOL;
                } elseif (1 <= $strClass and $strClass <= 3) {
                    // 役職ごとに処理
                    switch ($strClass) {
                        case 1:
                            $strClassName = "Person";
                            $arrClassList = $CONST_PERSON_LIST;
                            break;
                        case 2:
                            $strClassName = "Employee";
                            $arrClassList = $CONST_EMPLOYEE_LIST;
                            break;
                        case 3:
                            $strClassName = "Engineer";
                            $arrClassList = $CONST_ENGINEER_LIST;
                            break;
                    }

                    // 追加内容の入力
                    $strData = [];
                    foreach ($arrClassList as $intKey => $strList) {
                        print $strList . " :";
                        $strData[] = trim(fgets(STDIN));
                    }

                    // データを追加する
                    InsertData($strClassName, $arrPersonList, $strData);
                }

                break;

            // 一覧表示
            case 2 :

                if (0 < count($arrPersonList)) {
                    // データが入っている場合はすべて出力
                    PrintList($arrPersonList);
                } else {
                    // データが入っていない場合はメッセージ出力
                    print "リストに何も登録されていません。" . PHP_EOL;
                }

                break;

            // 検索
            case 3 :

                // 検索する氏名を入力
                print "検索する氏名 :";
                $strName = trim(fgets(STDIN));

                foreach ($arrPersonList as $strList) {
                    // 名前の取得
                    $strListName = $strList->getName();

                    if (preg_match("/$strName/", $strListName) == true) {
                        // 検索氏名にマッチした場合
                        print $strListName . PHP_EOL;
                    }
                }
                print PHP_EOL;

                break;
        }
    }
} while (true);

/**
 * PrintList
 * データリストの一覧表示
 * @param type $arrPersonList
 */
function PrintList($arrPersonList) {
    // Personの件数分ループ
    foreach ($arrPersonList as $List) {
        // Personのデータを一覧表示
        $List->printPerson();
        print PHP_EOL;
    }
}

/**
 * InsertData
 * 指定された役職のデータをリストに追加する
 * $arrPersonListは参照渡し
 * @param type $strClassName
 * @param type $arrPersonList
 * @param type $strData
 */
function InsertData($strClassName, &$arrPersonList, $strData) {
    // 役職ごとに処理
    switch ($strClassName) {
        case "Person" :
            $arrPersonList[] = new Person($strData[0], $strData[1], $strData[2], $strData[3]);
            break;
        case "Employee" :
            $arrPersonList[] = new Employee($strData[0], $strData[1], $strData[2], $strData[3], $strData[4]);
            break;
        case "Engineer" :
            $arrPersonList[] = new Engineer($strData[0], $strData[1], $strData[2], $strData[3], $strData[4]);
            break;
    }
}
