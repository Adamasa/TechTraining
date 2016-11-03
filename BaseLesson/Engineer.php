<?php

class Engineer extends Person {

    // スキル
    private $strSkill;

    /**
     * __construct
     * Engineerのコンストラクタ
     * @param type $strName
     * @param type $strAddress
     * @param type $intAge
     * @param type $strSkill
     * @param type $strPhone
     */
    public function __construct($strName, $strAddress, $intAge, $strSkill, $strPhone) {
        parent::__construct($strName, $strAddress, $intAge, $strPhone);
        $this->setSkill($strSkill);
    }

    /**
     * printEngineer
     * print
     * Engineerの情報を表示する
     */
    function printPerson() {
        parent::printPerson();
        echo "<p>スキル　　: {$this->getSkill()}</p>";
    }

    /**
     * getSkill
     * スキルのgetter
     * @return type
     */
    function getSkill() {
        return $this->strSkill;
    }

    /**
     * setSkill
     * スキルのsetter
     * @param type $strSkill
     */
    function setSkill($strSkill) {
        $this->strSkill = $strSkill;
    }

}
