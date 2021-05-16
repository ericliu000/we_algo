<?php


use algo\leetcode\common\LinkedListUtil;
use algo\leetcode\I0203RemoveLinkedListElements\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTestTest extends TestCase
{

    public function provider()
    {
        return [
            [
                'expected' => [],
                'listNode' => [],
                'remove' => 1,
            ],
            [
                'expected' => [1, 2, 3, 4, 5],
                'listNode' => [1, 2, 6, 3, 4, 5, 6],
                'remove' => 6,
            ],
            [
                'expected' => [],
                'listNode' => [7, 7, 7, 7],
                'remove' => 7,
            ]
        ];
    }

    /**
     * @dataProvider provider
     * @param $expected
     * @param $listNode
     * @param $remove
     */
    public function testRemoveElements($expected, $listNode, $remove)
    {
        $sol = new Solution();
        $list = LinkedListUtil::creator($listNode);
        $actual = $sol->removeElements($list, $remove);
        $this->assertEquals($expected, LinkedListUtil::parser($actual));
    }
}
