<?php

namespace algo\sword_means_offer\smo09;

use algo\stack\ArrayStack;

/**
 * @link https://leetcode-cn.com/problems/yong-liang-ge-zhan-shi-xian-dui-lie-lcof/submissions/
 * 剑指offer09 用两个栈实现队列
 */
class CQueue
{
    private $stack1;
    private $stack2;

    /**
     */
    function __construct()
    {
        $this->stack1 = new ArrayStack();
        $this->stack2 = new ArrayStack();
    }

    /**
     * @param Integer $value
     * @return NULL
     */
    function appendTail($value)
    {
        $this->stack1->push($value);
    }

    /**
     * @return Integer
     */
    function deleteHead()
    {
        if (!$this->stack2->isEmpty()) {
            return $this->stack2->pop();
        }
        if ($this->stack1->isEmpty()) {
            return -1;
        }
        while (!$this->stack1->isEmpty()) {
            $this->stack2->push($this->stack1->pop());
        }
        return $this->stack2->pop();
    }
}

/**
 * Your CQueue object will be instantiated and called as such:
 * $obj = CQueue();
 * $obj->appendTail($value);
 * $ret_2 = $obj->deleteHead();
 */