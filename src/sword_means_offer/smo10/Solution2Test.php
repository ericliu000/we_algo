<?php


namespace algo\sword_means_offer\smo10;

use PHPUnit\Framework\TestCase;

class Solution2Test extends TestCase
{
    public function provider(): array
    {
        return [
            [2, 2],
            [7, 21],
            [0, 1],
            [44, 134903163],
        ];
    }

    /**
     * @dataProvider provider
     * @param $n
     * @param $exp
     */
    public function testSolve($n, $exp)
    {
        $sol = new Solution2();
        $this->assertEquals($exp, $sol->numWays($n));
    }
}