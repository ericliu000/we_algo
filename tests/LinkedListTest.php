<?php

use algo\LinkedList;
use PHPUnit\Framework\TestCase;

class LinkedListTest extends TestCase
{
    public function testAdd()
    {
        $linkedList = new LinkedList();
        $linkedList->addFirst(23);
        $linkedList->addLast(25);
        $linkedList->add(1, 24);
//        $linkedList->add(100, 23333);
        $this->assertEquals('23 24 25', (string)$linkedList);
    }
}
