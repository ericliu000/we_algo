<?php


namespace algo\leetcode\i0206ReverseLinkedList;

use algo\leetcode\common\ListNode;

/**
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
class Solution2
{
    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList($head)
    {
        if ($head == null || $head->next == null) {
            return $head;
        }
        $rev = $this->reverseList($head->next);
        $head->next->next = $head;
        $head->next = null;
        return $rev;
    }
}