<?php

namespace algo\sword_means_offer\smo52;

use algo\leetcode\common\ListNode;

/**
 * 剑指 Offer 52. 两个链表的第一个公共节点
 * https://leetcode-cn.com/problems/liang-ge-lian-biao-de-di-yi-ge-gong-gong-jie-dian-lcof/
 */
class Solution
{
    public function getIntersectionNode($headA, $headB): ?ListNode
    {
        if ($headB === null || $headA === null) return null;
        $p1 = $headA;
        $p2 = $headB;
        while ($p1 != $p2) {
            $p1 = $p1 === null ? $headB : $p1->next;
            $p2 = $p2 === null ? $headA : $p2->next;
        }
        return $p1;
    }
}