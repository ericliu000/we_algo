<?php

use algo\leetcode\common\LinkedListUtil;
use algo\leetcode\i0141LinkedListCycle\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function provider()
    {
        return [
            [[3,2,0,-4], 1, true],
//            [[1,2], 0, true],
//            [[1], -1, false],
//            [[1], 0, true],
//            [[], 1, false],
        ];
    }

    /**
     * @dataProvider provider
     */
    public function testHasCycle($l1, $pos, $exp)
    {
        $sol = new Solution();
        $listNode = LinkedListUtil::creator($l1);
        $posNode = null;
        $tailNode = null;
        if ($pos != -1) {
            $cur = $listNode;

            $i = 0;
            // 寻找pos节点和尾结点
            while ($cur->next != null) {
                if ($i == $pos) {
                    $posNode = $cur;
                }
                $i++;
                $cur = $cur->next;
            }
            if ($i == $pos) {
                $posNode = $cur;
            }
            $tailNode = $cur;
            if ($posNode && $tailNode) {
                $tailNode->next = $posNode;
            }
        }
        $this->assertEquals($exp, $sol->hasCycle($listNode));
    }
}
