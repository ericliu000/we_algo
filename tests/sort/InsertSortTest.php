<?php
namespace algo\test;

use algo\sort\InsertSort;
use PHPUnit\Framework\TestCase;

class InsertSortTest extends TestCase
{
    use provider;

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
