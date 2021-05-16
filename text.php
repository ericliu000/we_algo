<?php

/**
 * 辅助栈
 *
 * Class CQueue
 */
class CQueue {

    public $stackOne;
    public $stackTwo;

    /**
     */
    function __construct() {
        // 负责出栈
        $this->stackOne = array();

        // 负责入栈
        $this->stackTwo = array();
    }

    /**
     * @param Integer $value
     * @return NULL
     */
    function appendTail($value) {
        array_push($this->stackTwo);
    }

    /**
     * @return Integer
     */
    function deleteHead() {
        if(!empty($this->stackOne)) return array_pop($this->stackOne);
        while(!empty($this->stackTwo)){
            $val = array_pop($this->stackTwo);
            array_push($this->stackOne,$val);
        }

        return !empty($this->stackOne) ? array_pop($this->stackOne) : -1;
    }
}


$Solution = new Solution();
$res = $Solution->sumNums(9);

echo json_encode($res);
