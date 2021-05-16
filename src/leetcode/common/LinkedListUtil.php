<?php


namespace algo\leetcode\common;


class LinkedListUtil
{
    public static function creator(array $arr)
    {
        $list = null;
        while ($arr) {
            $last = array_pop($arr);
            if ($list == null) {
                $list = new ListNode($last, null);
            } else {
                $list = new ListNode($last, $list);
            }
        }
        return $list;
    }

    public static function parser($listNode)
    {
        if ($listNode == null) {
            return [];
        }
        $arr = [];
        while ($listNode != null) {
            $arr[] = $listNode->val;
            $listNode = $listNode->next;
        }
        return $arr;
    }

}
