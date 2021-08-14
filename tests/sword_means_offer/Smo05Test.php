<?php


namespace sword_means_offer;

use algo\sword_means_offer\Smo05;
use PHPUnit\Framework\TestCase;

class Smo05Test extends TestCase
{
    public function provider(): array
    {
        return [
            ['we are happy.', str_replace(' ', '%20', 'we are happy.')],
            ['', ''],
            [[1, 2, 3], '']
        ];
    }

    /**
     * @dataProvider provider
     * @param $str
     */
    public function testSolve($str, $exp)
    {
        $sol = new Smo05();
        $this->assertEquals($exp, $sol->solve($str));
    }
}