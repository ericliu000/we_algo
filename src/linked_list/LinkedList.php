<?php

namespace algo\linked_list;

use algo\exception\IllegalIndexException;

/**
 * 链表
 * 近乎所有的链表相关的算法，都可以使用递归实现
 * Class LinkedList
 * @package algo\linked_list
 */
class LinkedList
{
    private $head;
    private int $size;

    public function __construct()
    {
        $this->head = null;
        $this->size = 0;
    }

    public function makeByArray(array $arr): Node
    {
        $last = $this->head;
        foreach ($arr as $value) {
            $node = new Node($value);
            if ($last == null) {
                $last = $node;
                $this->head = $node;
            } else {
                $last->next = $node;
            }
            $last = $node;
        }
        return $this->head;
    }

}
