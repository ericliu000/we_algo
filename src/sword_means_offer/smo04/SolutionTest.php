<?php


namespace sword_means_offer;


use algo\sword_means_offer\Smo03;
use algo\sword_means_offer\smo04\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
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
                ], 7, true
            ],
            [
                [
                    [1, 2, 8, 9],
                    [2, 4, 9, 12],
                    [4, 7, 10, 13],
                    [6, 8, 11, 15],
                ], 19, false //不存在
            ],
            [
                [
                    [1, 2, 8, 9],
                    [2, 4, 9],
                    [4, 7, 10, 13],
                    [6, 8, 11, 15],
                ], 7, false //第二维数组长度不对
            ],
            [
                [
                    [1, 2, 8, 9],
                    [2, 4, 9, 12],
                ], 9, true // 2，4维度数组
            ],
            [
                [], 7, false //空
            ],
            [
                'abc', 7, false //非数组
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
    public function testSolve($matrix, $target, $exp)
    {
        $sol = new Solution();
        $this->assertEquals($exp, $sol->findNumberIn2DArray($matrix, $target));
    }
}