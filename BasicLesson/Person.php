<?php

class Person {

    private $strName;
    private $strAddress;
    private $intAge;
    private $strPhone;

    public function __construct($strName, $strAddress, $intAge, $strPhone) {
        $this->setName($strName);
        $this->setAddress($strAddress);
        $this->setAge($intAge);
        $this->setPhone($strPhone);
        }

        public function print() {
        echo "氏名    ?��{getName()}"
        echo "住所    ?��{getAddress()}"
        echo "年齢    ?��{getAge()}"
        echo "電話番号?��{getPhone()}"
    }

    public function setName($strName) {
        $this->strName = $strName;
    }

    public function getName($strName) {
        return $this->strName;
    }

    public function setAddress($strAddress) {
        $this->strAddress = $strAddress;
    }

    public function getAddress($strAddress) {
        return $this->strAddress;
    }

    public function setAge($intAge) {
        $this->intAge = $intAge;
    }

    public function getAge($intAge) {
        return $this->intAge;
    }

    public function setPhone($strPhone) {
        $this->strPhone = $strPhone;
    }

    public function getPhone($strPhone) {
        return $this->strPhone;
    }
