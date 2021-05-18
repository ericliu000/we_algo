<?php


namespace algo\leetcode\i0141LinkedListCycle;

use algo\leetcode\common\ListNode;

/**
 * @link https://leetcode-cn.com/problems/linked-list-cycle/
 *
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution
{
    /**
     * @param ListNode $head
     * @return Boolean
     */
    function hasCycle($head)
    {
        $fast = $slow = $head;
        while ($fast != null && $fast->next != null) {
            $slow = $slow->next;
            $fast = $fast->next->next;

            if ($slow->val == $fast->val) {
                return true;
            }
        }
        return false;
    }
}