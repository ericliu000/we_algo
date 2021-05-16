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
class Solution3 {

    /**
     * @param ListNode $head
     * @param Integer $val
     * @return ListNode
     */
    function removeElements($head, $val) {

        if ($head == null) {
            return null;
        }

        $head->next = $this->removeElements($head->next, $val);
        return $head->val == $val ? $head->next : $head;
    }
}