<?php
use algo\exception\IllegalIndexException;
use algo\linked_list\LinkedListDummy;
use PHPUnit\Framework\TestCase;

class LinkedListDummyTest extends TestCase
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
        $linkedList = new LinkedListDummy();
        $linkedList->addFirst($first);
        $linkedList->addLast($last);
        $linkedList->add($index, $value);
        $this->assertEquals($expected, (string)$linkedList);
    }

    public function testGetInstance()
    {
        $linkedList = new LinkedListDummy();
        $linkedList->addFirst(23);
        $linkedList->addLast(25);
        $linkedList->add(1, 24);
        $this->assertEquals('23 24 25', (string)$linkedList);
        return $linkedList;
    }

    /**
     * @depends testGetInstance
     * @param LinkedListDummy $linkedList
     * @throws Exception
     */
    public function testAddException(LinkedListDummy $linkedList)
    {
        $this->expectExceptionMessage(IllegalIndexException::MESSAGE_PREFIX);
        $linkedList->add(100, 23333);
    }

    /**
     * @depends testGetInstance
     * @param LinkedListDummy $linkedList
     * @throws IllegalIndexException
     */
    public function testGet(LinkedListDummy $linkedList)
    {
        $this->assertEquals(24, (string)$linkedList->get(1));
        $this->assertEquals(23, (string)$linkedList->get(0));

        $this->expectExceptionMessage(IllegalIndexException::MESSAGE_PREFIX);
        $linkedList->get(100);
    }

    /**
     * @depends testGetInstance
     * @param LinkedListDummy $linkedList
     * @throws IllegalIndexException
     */
    public function testGetException(LinkedListDummy $linkedList)
    {
        $this->expectExceptionMessage(IllegalIndexException::MESSAGE_PREFIX);
        $linkedList->get(100);
    }

    /**
     * @depends testGetInstance
     * @param LinkedListDummy $linkedList
     * @throws Exception
     */
    public function testRemove(LinkedListDummy $linkedList)
    {
        $this->assertEquals('23 25', (string)$linkedList->remove(1));
    }

    public function testRemoveDepends()
    {
        $linkedList = new LinkedListDummy();
        $linkedList->addFirst(23);
        $linkedList->addLast(25);
        $linkedList->add(1, 24);
        $this->assertEquals('23 24 25', (string)$linkedList);
        return $linkedList;
    }

    public function testRemoveDepends2()
    {
        $linkedList = new LinkedListDummy();
        $linkedList->addFirst(23);
        $linkedList->addLast(25);
        $linkedList->add(1, 24);
        $this->assertEquals('23 24 25', (string)$linkedList);
        return $linkedList;
    }

    /**
     * @depends testRemoveDepends
     * @param LinkedListDummy $linkedList
     * @throws Exception
     */
    public function testRemoveFirst(LinkedListDummy $linkedList)
    {
        $this->assertEquals('24 25', (string)$linkedList->removeFirst());
    }

    /**
     * @depends testRemoveDepends2
     * @param LinkedListDummy $linkedList
     * @throws Exception
     */
    public function testRemoveLast(LinkedListDummy $linkedList)
    {
        $this->assertEquals('23 24', (string)$linkedList->removeLast());
    }
}
