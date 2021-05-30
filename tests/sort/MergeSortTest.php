<?php


namespace algo\test;

use algo\sort\MergeSort;
use PHPUnit\Framework\TestCase;

class MergeSortTest extends TestCase
{
    use provider;

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