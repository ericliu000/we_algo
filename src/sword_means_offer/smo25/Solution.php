<?php

namespace algo\sword_means_offer\smo25;

use algo\leetcode\common\ListNode;

/**
 * 剑指 Offer 25. 合并两个排序的链表
 * @link https://leetcode-cn.com/problems/he-bing-liang-ge-pai-xu-de-lian-biao-lcof/
 *
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function mergeTwoLists($l1, $l2) {
        if ($l1 == null) return $l2;
        if ($l2 == null) return $l1;
        $dummy = new ListNode(0);
        $tail = $dummy;
        while($l1 != null && $l2 != null) {
            if ($l1->val > $l2->val) {
                $tail->next = $l2;
                $l2 = $l2->next;
            } else {
                $tail->next = $l1;
                $l1 = $l1->next;
            }
            $tail = $tail->next;
        }
        if ($l1 != null) {
            $tail->next = $l1;
        }
        if ($l2 != null) {
            $tail->next = $l2;
        }
        return $dummy->next;
    }
}