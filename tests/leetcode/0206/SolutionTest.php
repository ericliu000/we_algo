<?php


use algo\leetcode\common\LinkedListUtil;
use algo\leetcode\i0206ReverseLinkedList\Solution;
use algo\leetcode\i0206ReverseLinkedList\Solution2;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{

    public function provider()
    {
        return [
            [
                'expected' => [],
                'listNode' => [],
            ],
            [
                'expected' => [1, 2, 3, 4, 5],
                'listNode' => [5, 4, 3, 2, 1],
            ],
            [
                'expected' => [1, 2],
                'listNode' => [2, 1],
            ]
        ];
    }

    /**
     * @dataProvider provider
     * @param $expected
     * @param $listNode
     */
    public function testReverseList($expected, $listNode)
    {
        $sol = new Solution();
        $list = LinkedListUtil::creator($listNode);
        $actual = $sol->reverseList($list);
        $this->assertEquals($expected, LinkedListUtil::parser($actual));
    }

    /**
     * @dataProvider provider
     * @param $expected
     * @param $listNode
     */
    public function testReverseList2($expected, $listNode)
    {
        $sol = new Solution2();
        $list = LinkedListUtil::creator($listNode);
        $actual = $sol->reverseList($list);
        $this->assertEquals($expected, LinkedListUtil::parser($actual));
    }
}
