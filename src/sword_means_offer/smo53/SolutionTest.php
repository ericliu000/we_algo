<?php

namespace algo\sword_means_offer\smo53;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function provider(): array
    {
        return [
            [[5, 7, 7, 8, 8, 10], 8, 2],
            [[5, 7, 7, 8, 8, 10], 6, 0],
            [[], 6, 0],
            ['foo', 6, 0],
        ];
    }

    /**
     * @dataProvider provider
     * @param $nums
     * @param $n
     * @param $exp
     */
    public function testSolve($nums, $n, $exp)
    {
        $sol = new Solution();
        $this->assertEquals($exp, $sol->search($nums, $n));
    }
}