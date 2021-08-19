<?php

namespace algo\sword_means_offer\smo42;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function provider(): array
    {
        return [
            [[-2,1,-3,4,-1,2,1,-5,4], 6],
            [[], PHP_INT_MIN],
            ['abc', PHP_INT_MIN],
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
        $this->assertEquals($solve->maxSubArray($a), $b);
    }

}
