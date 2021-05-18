<?php


namespace algo\test;


use algo\sort\MergeSort;
use PHPUnit\Framework\TestCase;

class MergeSortTest extends TestCase
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
        $this->assertEquals($exp, MergeSort::sort($arr));
    }
}