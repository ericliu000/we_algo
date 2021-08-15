<?php


namespace algo\sword_means_offer\smo11;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function provider(): array
    {
        return [
            [[3, 4, 5, 1, 2], 1],
            [[2, 2, 2, 0, 1], 0],
        ];
    }

    /**
     * @dataProvider provider
     * @param $arr
     * @param $exp
     * @throws \algo\exception\IllegalInputException
     */
    public function testSolve($arr, $exp)
    {
        $sol = new Solution();
        $this->assertEquals($exp, $sol->minArray($arr));
    }
}