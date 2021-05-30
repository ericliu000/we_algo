<?php

namespace algo\test;

use algo\sort\SelectSort;
use PHPUnit\Framework\TestCase;

class SelectSortTest extends TestCase
{
    use provider;

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
