<?php


use algo\recursion\Sum;
use PHPUnit\Framework\TestCase;

class SumTest extends TestCase
{
    public function provider(): array
    {
        return [
            [[1,2,3,4], 10],
            [[], 0]
        ];
    }

    /**
     * @dataProvider provider
     */
    public function testGetSum($arr, $expected)
    {
        $this->assertEquals($expected, Sum::getSum($arr));
    }
}
