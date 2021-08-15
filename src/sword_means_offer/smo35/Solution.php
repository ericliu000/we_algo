<?php

namespace algo\sword_means_offer\smo35;

class Solution
{
    public function copyRandomList(?Node $head): ?Node
    {
        if ($head === null) {
            return null;
        }

        $cur = $head;
        $map = [];
        while ($cur !== null) {
            $node = new Node();
            $node->val = $cur->val;

            $k = &$node;
            $map[$k] = $cur;
        }










    }
}

class Node
{
    public $val;
    public Node $next;
    public Node $random;
}