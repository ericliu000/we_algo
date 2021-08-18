<?php

namespace algo\sword_means_offer\smo03;

use PHPUnit\Framework\TestCase;

/**
 * 找出数组中重复的数字
 * Class SolutionTest
 */
class SolutionTest extends TestCase
{

    public function provider(): array
    {
        return [
            [[2, 3, 1, 0, 2, 5, 3], [2, 3]],
            [[2, 3, 1, 0, 4, 5, 6], [-1]],
            [[-2, 3, 1, 0, 4, 5, 6], [-1]],
            [[2, 3, 1, 0, 4, 5, 7], [-1]],
            [[], [-1]],
            ['abc', [-1]],
        ];
    }

    /**
     * @dataProvider provider
     * @param $a
     * @param $b
     */
    public function testSolve($a, $b)
    {
        $solve = new Solution();
        $this->assertContains($solve->findRepeatNumber($a), $b);
    }
}
