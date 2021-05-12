<?php


use algo\leetcode\common\LinkedListUtil;
use algo\leetcode\common\ListNode;
use PHPUnit\Framework\TestCase;

class LinkedListUtilTest extends TestCase
{
    public function testCreator()
    {
        $a = [2, 4, 3];
//[5, 6, 4], [7, 0, 8]
        $list = LinkedListUtil::creator($a);
//        var_dump($list);
        $this->assertTrue(true);
        return $list;
    }

    /**
     * @depends testCreator
     */
    public function testParser(ListNode $listNode)
    {
        $arr = LinkedListUtil::parser($listNode);
        $this->assertSame([2, 4, 3], $arr);
    }

}
