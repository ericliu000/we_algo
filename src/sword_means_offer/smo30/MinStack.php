<?php

namespace algo\sword_means_offer\smo30;

use algo\stack\ArrayStack;

/**
 * 30 包含min函数的栈
 * @link https://leetcode-cn.com/problems/bao-han-minhan-shu-de-zhan-lcof/
 */
class MinStack {

    private $dataStack;
    private $minStack;

    /**
     * initialize your data structure here.
     */
    function __construct() {
        $this->dataStack = new ArrayStack();
        $this->minStack = new ArrayStack();
    }

    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        $this->dataStack->push($x);
        if ($this->minStack->isEmpty() || $x < $this->min()) {
            $this->minStack->push($x);
        } else {
            $this->minStack->push($this->min());
        }
    }

    /**
     * @return NULL
     */
    function pop() {
        $this->dataStack->pop();
        $this->minStack->pop();
    }

    /**
     * @return Integer
     */
    function top() {
        return $this->dataStack->peek();
    }

    /**
     * @return Integer
     */
    function min() {
        return $this->minStack->peek();
    }
}

/**
 * Your MinStack object will be instantiated and called as such:
 * $obj = MinStack();
 * $obj->push($x);
 * $obj->pop();
 * $ret_3 = $obj->top();
 * $ret_4 = $obj->min();
 */