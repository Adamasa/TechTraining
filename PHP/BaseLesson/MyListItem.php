<?php

class MyListItem {

    private $next;
    private $item;

    function __construct($value) {
        $this->setItem($value);
        $this->setNext(null);
    }

    function getNext() {
        return $this->next;
    }

    function setNext($next) {
        $this->next = $next;
    }

    function getItem() {
        return $this->item;
    }

    function setItem($item) {
        $this->item = $item;
    }

}

?>