<?php

use algo\sword_means_offer\Smo01;
use PHPUnit\Framework\TestCase;

class Smo01Test extends TestCase
{

    public function provider(): array
    {
        return [
            [[2, 3, 1, 0, 2, 5, 3], [2, 3]],
            [[2, 3, 1, 0, 4, 5, 6], [false]],
            [[], [false]],
            ['abc', [false]],
        ];
    }

    /**
     * @dataProvider provider
     * @param $a
     * @param $b
     */
    public function testSolve($a, $b)
    {
        $solve = new Smo01();
        $this->assertContains($solve->solve($a), $b);
    }
}
