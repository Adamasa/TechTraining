<?php

class Person {

    // 氏名
    private $strName;
    // 住所
    private $strAddress;
    // 年齢
    private $intAge;
    // 電話番号
    private $strPhone;

    /**
     * __construct
     * Personのコンストラクタ
     * @param type $strName
     * @param type $strAddress
     * @param type $intAge
     * @param type $strPhone
     */
    public function __construct($strName, $strAddress, $intAge, $strPhone) {
        $this->setName($strName);
        $this->setAddress($strAddress);
        $this->setAge($intAge);
        $this->setPhone($strPhone);
    }

    /**
     * printPerson
     * Personのデータを表示する
     */
    public function printPerson() {
        echo "氏名　　　: {$this->getName()}" . PHP_EOL;
        echo "住所　　　: {$this->getAddress()}" . PHP_EOL;
        echo "年齢　　　: {$this->getAge()}" . PHP_EOL;
        echo "電話番号　: {$this->getPhone()}" . PHP_EOL;
    }

    /**
     * setName
     * 氏名のsetter
     * @param type $strName
     */
    public function setName($strName) {
        $this->strName = $strName;
    }

    /**
     * getName
     * 氏名のgetter
     * @return type
     */
    public function getName() {
        return $this->strName;
    }

    /**
     * setAddress
     * 住所のsetter
     * @param type $strAddress
     */
    public function setAddress($strAddress) {
        $this->strAddress = $strAddress;
    }

    /**
     * getAddress
     * 住所のgetter
     * @return type
     */
    public function getAddress() {
        return $this->strAddress;
    }

    /**
     * setAge
     * 年齢のsetter
     * @param type $intAge
     */
    public function setAge($intAge) {
        $this->intAge = $intAge;
    }

    /**
     * getAge
     * 年齢のgetter
     * @return type
     */
    public function getAge() {
        return $this->intAge;
    }

    /**
     * setPhone
     * 電話番号のsetter
     * @param type $strPhone
     */
    public function setPhone($strPhone) {
        $this->strPhone = $strPhone;
    }

    /**
     * getPhone
     * 電話番号のgetter
     * @return type
     */
    public function getPhone() {
        return $this->strPhone;
    }

}
