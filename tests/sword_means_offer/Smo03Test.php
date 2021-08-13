<?php


namespace algo;


use algo\sword_means_offer\Smo03;
use PHPUnit\Framework\TestCase;

class Smo03Test extends TestCase
{
    public function provider(): array
    {
        return [
            [
                [
                    [1, 2, 8, 9],
                    [2, 4, 9, 12],
                    [4, 7, 10, 13],
                    [6, 8, 11, 15],
                ], 4, 4, 7, true
            ],
            [
                [
                    [1, 2, 8, 9],
                    [2, 4, 9, 12],
                    [4, 7, 10, 13],
                    [6, 8, 11, 15],
                ], 4, 4, 19, false //不存在
            ],
            [
                [
                    [1, 2, 8, 9],
                    [2, 4, 9],
                    [4, 7, 10, 13],
                    [6, 8, 11, 15],
                ], 4, 4, 7, false //第二维数组长度不对
            ],
            [
                [
                    [1, 2, 8, 9],
                    [2, 4, 9, 12],
                ], 2, 4, 9, true // 2，4维度数组
            ],
            [
                [], 0, 0, 7, false //空
            ],
            [
                'abc', 4, 4, 7, false //非数组
            ],
        ];

    }

    /**
     * @dataProvider provider
     * @param $matrix
     * @param $row
     * @param $column
     * @param $target
     * @param $exp
     */
    public function testSolve($matrix, $row, $column, $target, $exp)
    {
        $sol = new Smo03();
        $this->assertEquals($exp, $sol->solve($matrix, $row, $column, $target));
    }
}