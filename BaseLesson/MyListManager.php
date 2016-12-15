<?php

// MyListItem.phpの読み込み
include_once("MyListItem.php");

class MyListManager {

    // 基点となるオブジェクト
    private $firstItem;
    // メッセージ定数
    private $CONST_MSG_NOINDEX = "指定された位置は存在しません。" . PHP_EOL;
    private $CONST_MSG_NOITEM = "要素がありません。" . PHP_EOL;
    private $CONST_MSG_MINUS = "指定位置を負数にすることはできません。" . PHP_EOL;

    /**
     * __construct
     * MyListItemのコンストラクタ
     * @param type $MyListItem
     */
    function __construct($MyListItem = null) {
        $this->firstItem = $MyListItem;
    }

    /**
     * AddLast
     * 引数で指定されたオブジェクトを追加する
     * @param type $o
     */
    function AddLast($o) {
        if ($o != null) {
            // 要素がある場合
            // 入る要素
            $addItem = new MyListItem($o);

            // 基点オブジェクト
            $firstItem = $this->firstItem;

            if ($firstItem == null) {
                // 基点の次がない場合、要素を追加
                $this->firstItem = $addItem;
            } else {
                // 基点の次がある場合
                $nextObject = $firstItem;

                while ($nextObject->getNext() != null) {
                    // 基点の次がない箇所までループ
                    $nextObject = $nextObject->getNext();
                }

                // 要素を追加
                $nextObject->setNext($addItem);
            }

            print "{$o}を末尾に追加しました。" . PHP_EOL;
        } else {
            // 要素がない場合
            print $this->CONST_MSG_NOITEM;
        }
    }

    /**
     * AddIndex
     * 引数で指定されたオブジェクトを引数で指定された位置に追加します。
     * @param type $o
     * @param type $i
     */
    function AddIndex($o, $i) {
        if ($o != null) {
            // 要素がある場合
            // 入る要素
            $addItem = new MyListItem($o);
            // 基点オブジェクト
            $nextObject = $this->firstItem;

            // 指定位置監視フラグ
            $blOverFlg = 0;

            if ($i < 0) {
                print $this->CONST_MSG_MINUS;
            }

            for ($j = 1; $j < $i; $j++) {
                $nextObject = $nextObject->getNext();

                if ($nextObject == null) {
                    $blOverFlg = 1;
                    break;
                }
            }

            if ($blOverFlg) {
                print $this->CONST_MSG_NOINDEX;
            } else {
                // 既存の次点オブジェクトを一時的に保持
                $tempObject = $nextObject->getNext();

                // 要素を追加
                $nextObject->setNext($addItem);

                // 要素の次点オブジェクトに一時的に保持したオブジェクトを追加
                $nextObject->getNext()->setNext($tempObject);

                print "{$o}を{$i}番目に追加しました。" . PHP_EOL;
            }
        } else {
            print $this->CONST_MSG_NOITEM;
        }
    }

    /**
     * remove
     * @param type $i
     */
    function remove($i) {
        // 基点オブジェクト
        $nextObject = $this->firstItem;

        // 指定位置監視フラグ
        $blOverFlg = 0;

        if ($i < 0) {
            print $this->CONST_MSG_MINUS;
        }

        for ($j = 0; $j < $i - 1; $j++) {
            $nextObject = $nextObject->getNext();

            if ($nextObject == null) {
                $blOverFlg = 1;
                break;
            }
        }
        if ($blOverFlg) {
            print $this->CONST_MSG_NOINDEX;
        } else {
            $tempObject = $nextObject->getNext()->getNext();

            if (is_null($tempObject)) {
                $nextObject->setNext(null);
            } else {
                $nextObject->setNext($tempObject);
            }

            print "{$i}番目の要素を削除しました。" . PHP_EOL;
        }
    }

    /**
     * listPrint
     */
    function listPrint() {
        // 基点オブジェクト
        $nextObject = $this->firstItem;

        // 出力テキスト
        $strList = "";

        // 基点がある場合
        if ($nextObject != null) {
            while ($nextObject != null) {
                $strList = $strList . (string) $nextObject->getItem() . ", ";
                $nextObject = $nextObject->getNext();
            }
        }

        print 'リスト一覧 : ' . $this->Left($strList, strlen($strList) - 2) . PHP_EOL . PHP_EOL;
    }

    /**
     * Left
     * @param type $strText
     * @param type $intLength
     * @return type
     */
    public function Left($strText, $intLength) {
        // 指定文字列($strText)を左から指定文字数分($intLength)だけ切り抜く
        return substr($strText, 0, $intLength);
    }

}
