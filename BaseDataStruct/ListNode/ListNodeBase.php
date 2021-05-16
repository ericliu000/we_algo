<?php

/**
 * 链表
 *
 * Created by PhpStorm.
 * User: lio
 * Date: 2021/5/6
 * Time: 上午8:33
 */
class ListNodeBase
{
    public $listNode;

    public function __construct()
    {
        $this->listNode = new SplDoublyLinkedList();
    }


    /**
     * 在链表头添加元素
     */
    public function addFirst(){
        $node = array(); // new Node();
        $node->next = $this->listNode->head;
        $this->listNode->head = $node;
    }
}