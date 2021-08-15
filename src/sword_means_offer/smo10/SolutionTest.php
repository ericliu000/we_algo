<?php


namespace algo\sword_means_offer\smo10;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function provider(): array
    {
        return [
            [20, 6765],
        ];
    }

    /**
     * @dataProvider provider
     * @param $n
     * @param $exp
     */
    public function testSolve($n, $exp)
    {
        $sol = new Solution();
        $this->assertEquals($exp, $sol->fib($n));
    }
}