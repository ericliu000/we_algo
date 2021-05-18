<?php

use algo\sort\SelectSort;
use algo\test\DataProvider;
use PHPUnit\Framework\TestCase;

class SelectSortTest extends TestCase
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
        $this->assertEquals($exp, SelectSort::sort($arr));
    }
}
