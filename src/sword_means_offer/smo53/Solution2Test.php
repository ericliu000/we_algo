<?php

namespace algo\sword_means_offer\smo53;

use PHPUnit\Framework\TestCase;

class Solution2Test extends TestCase
{
    public function provider(): array
    {
        return [
            [[0,1,3], 2],
            [[0,1,2,3,4,5,6,7,9], 8],
            [[0,2,3,4,5,6,7,8,9], 1],
            ['foo', -1],
        ];
    }

    /**
     * @dataProvider provider
     * @param $nums
     * @param $exp
     */
    public function testSolve($nums, $exp)
    {
        $sol = new Solution2();
        $this->assertEquals($exp, $sol->missingNumber($nums));
    }
}