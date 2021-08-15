<?php


namespace algo\sword_means_offer\smo06;


use algo\linked_list\Node;

class Smo06
{
    public function solve($head): Node
    {
        //反转链表
        $prev = null;
        $curr = $head;
        while ($curr != null) {
            $next = $curr->next;
            $curr->next = $prev;
            $prev = $curr;
            $curr = $next;
        }
        return $prev;
    }
}