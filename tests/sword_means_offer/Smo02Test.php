<?php


namespace algo;


use algo\sword_means_offer\Smo02;
use PHPUnit\Framework\TestCase;

class Smo02Test extends TestCase
{
    public function provider(): array
    {
        return [
            [[2, 3, 5, 4, 3, 2, 6, 7], [2, 3]],
            [[-2, 3, 5, 4, 3, 2, 6, 7], [-1]],
            [[2, 3, 5, 4, 3, 2, 6, 8], [-1]],
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
        $sol = new Smo02();
//        var_dump($sol->solve($a));
        $this->assertContains($sol->solve($a), $b);
    }
}