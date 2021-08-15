<?php

namespace algo\sword_means_offer\smo21;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function provider(): array
    {
        return [
            [[1,2,3,4], [1,3,2,4]],
            [[2, 4, 6], [2, 4, 6]],
        ];
    }

    /**
     * @dataProvider provider
     * @param $arr
     * @param $exp
     */
    public function testSolve($arr, $exp)
    {
        $sol = new Solution();
        $this->assertEquals($exp, $sol->exchange($arr));
    }

}