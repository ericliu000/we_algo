<?php

use algo\leetcode\common\LinkedListUtil;
use algo\leetcode\i0002AddTwoNumbers\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function provider()
    {
        $aa = [
            [[2, 4, 3],[5, 6, 4], [7, 0, 8]],
            [[0], [0], [0]],
            [[9, 9, 9, 9, 9, 9, 9], [9, 9, 9, 9], [8, 9, 9, 9, 0, 0, 0, 1]]
        ];

        $res = [];
        foreach ($aa as $item)
        {
            $res[] = [
                LinkedListUtil::creator($item[0]),
                LinkedListUtil::creator($item[1]),
                $item[2]
            ];
        }
        return $aa;
    }

    /**
     * @dataProvider provider
     */
    public function testAddTwoNumbers($l1, $l2, $exp)
    {
        $sol = new Solution();
        $this->assertEquals($exp, LinkedListUtil::parser($sol->addTwoNumbers($l1, $l2)));
    }
}
