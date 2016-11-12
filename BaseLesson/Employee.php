<?php

class Employee extends Person {

    // 所属部署名
    private $strSection;

    /**
     * __construct
     * Employeeのコンストラクタ
     * @param type $strName
     * @param type $strAddress
     * @param type $intAge
     * @param type $strSection
     * @param type $strPhone
     */
    public function __construct($strName, $strAddress, $intAge, $strSection, $strPhone) {
        parent::__construct($strName, $strAddress, $intAge, $strPhone);
        $this->setSection($strSection);
    }

    /**
     * printEmployee
     * Employeeの情報を表示する
     */
    function printPerson() {
        parent::printPerson();
        echo "所属部署名: {$this->getSection()}" . PHP_EOL;
    }

    /**
     * getSection
     * 所属部署名のgetter
     * @return type
     */
    function getSection() {
        return $this->strSection;
    }

    /**
     * setSection
     * 所属部署名のsetter
     * @param type $strSection
     */
    function setSection($strSection) {
        $this->strSection = $strSection;
    }

}
