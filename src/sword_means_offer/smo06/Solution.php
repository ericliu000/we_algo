<?php

namespace algo\sword_means_offer\smo06;

/**
 * 06 从尾到头递归解法
 * @link https://leetcode-cn.com/problems/cong-wei-dao-tou-da-yin-lian-biao-lcof/
 */
class Solution
{
    private $res = [];

    /**
     * @param ListNode $head
     * @return Integer[]
     */
    function reversePrint($head)
    {
        if ($head == null) {
            return [];
        }
        if ($head->next != null) {
            $this->reversePrint($head->next);
        }
        $this->res[] = $head->val;
        return $this->res;
    }
}

//Definition for a singly-linked list.
class ListNode
{
    public $val = 0;
    public $next = null;

    function __construct($val)
    {
        $this->val = $val;
    }
}