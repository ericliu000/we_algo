<?php


use algo\sort\InsertSort;
use PHPUnit\Framework\TestCase;

class InsertSortTest extends TestCase
{
    public function provider()
    {
        return [
            [[6, 4, 2, 3, 1, 5],[1,2,3,4,5,6]],
            [[6,5],[5,6]],
            [[],[]],
            [[1],[1]],
        ];
    }

    /**
     * @dataProvider provider
     * @param $arr
     * @param $exp
     */
    public function testSort($arr, $exp)
    {
        $this->assertEquals($exp, InsertSort::sort($arr));
    }
}
