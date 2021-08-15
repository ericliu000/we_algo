<?php

namespace algo\sword_means_offer\smo24;

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 * @link https://leetcode-cn.com/problems/fan-zhuan-lian-biao-lcof/
 * 24 反转链表
 */
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList($head) {
        if ($head === null) {
            return $head;
        }
        $prev = null;
        $curr = $head;
        while($curr !== null) {
            $next = $curr->next;
            $curr->next = $prev;
            $prev = $curr;
            $curr = $next;
        }
        return $prev;
    }
}