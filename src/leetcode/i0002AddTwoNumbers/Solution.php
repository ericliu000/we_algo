<?php

namespace algo\leetcode\i0002AddTwoNumbers;

use algo\leetcode\common\ListNode;

/**
 * @link https://leetcode-cn.com/problems/add-two-numbers/
 *
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution
{
    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2)
    {
        $lc1 = $l1;
        $lc2 = $l2;
        $carry = 0;
        $listNode = null;
        while ($lc1 || $lc2) {
            $v1 = $lc1->val ?: 0;
            $v2 = $lc2->val ?: 0;
            $sum = $v1 + $v2 + $carry;
            if ($sum >= 10) {
                $v = $sum % 10;
                $carry = 1;
            } else {
                $v = $sum;
                $carry = 0;
            }
            if ($listNode) {
                $listNode->next = new ListNode($v);
            } else {
                $listNode = new ListNode($v);
            }

            $lc1 = $lc1->next;
            $lc2 = $lc2->next;
        }
        if ($carry > 0) {
            $listNode->next = new ListNode($carry);
        }
        return $listNode;
    }
}