<?php


use algo\sort\InsertSort;
use algo\test\DataProvider;
use PHPUnit\Framework\TestCase;

class InsertSortTest extends TestCase
{
    public function provider()
    {
        return DataProvider::data();
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
