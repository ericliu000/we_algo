<?php

use algo\exception\IllegalIndexException;
use algo\LinkedList;
use PHPUnit\Framework\TestCase;

class LinkedListTest extends TestCase
{
    public function addProvider()
    {
        return [
            ['23 24 25', 23, 25, 1, 24],
            ['23 24 25', 23, 24, 2, 25]
        ];
    }

    /**
     * @dataProvider addProvider
     * @param $expected
     * @param $first
     * @param $last
     * @param $index
     * @param $value
     * @throws Exception
     */
    public function testAdd($expected, $first, $last, $index, $value)
    {
        $linkedList = new LinkedList();
        $linkedList->addFirst($first);
        $linkedList->addLast($last);
        $linkedList->add($index, $value);
        $this->assertEquals($expected, (string)$linkedList);
    }

    public function testGetInstance()
    {
        $linkedList = new LinkedList();
        $linkedList->addFirst(23);
        $linkedList->addLast(25);
        $linkedList->add(1, 24);
        $this->assertEquals('23 24 25', (string)$linkedList);
        return $linkedList;
    }

    /**
     * @depends testGetInstance
     * @param LinkedList $linkedList
     * @throws Exception
     */
    public function testAddException(LinkedList $linkedList)
    {
        $this->expectExceptionMessage(IllegalIndexException::MESSAGE_PREFIX);
        $linkedList->add(100, 23333);
    }

    /**
     * @depends testGetInstance
     * @param LinkedList $linkedList
     * @throws IllegalIndexException
     */
    public function testGet(LinkedList $linkedList)
    {
        $this->assertEquals(24, (string)$linkedList->get(1));
        $this->assertEquals(23, (string)$linkedList->get(0));

        $this->expectExceptionMessage(IllegalIndexException::MESSAGE_PREFIX);
        $linkedList->get(100);
    }

    /**
     * @depends testGetInstance
     * @param LinkedList $linkedList
     * @throws IllegalIndexException
     */
    public function testGetException(LinkedList $linkedList)
    {
        $this->expectExceptionMessage(IllegalIndexException::MESSAGE_PREFIX);
        $linkedList->get(100);
    }
}
