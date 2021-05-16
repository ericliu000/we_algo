<?php


namespace algo\leetcode\I0203RemoveLinkedListElements;

use algo\leetcode\common\ListNode;

/**
 * @link https://class.imooc.com/lesson/1580#mid=36140
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
class Solution {

    /**
     * @param ListNode $head
     * @param Integer $val
     * @return ListNode
     */
    function removeElements($head, $val) {

        // 如果头结点命中
        while ($head != null && $head->val == $val) {
            $head = $head->next;
        }

        if ($head == null) {
            return null;
        }

        // 如果非头结点命中
        $prev = $head;
        while ($prev->next != null) {
            /** @var ListNode $cur */
            if ($prev->next->val == $val) {
                $prev->next = $prev->next->next;
            } else {
                $prev = $prev->next;
            }
        }

        return $head;
    }
}