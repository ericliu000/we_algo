<?php

namespace algo\sort;

use PHPUnit\Framework\TestCase;

class SortTest extends TestCase
{
    public function provider(): array
    {
        return [
            [[9,5,2,11,12,4,3,1,7], [1,2,3,4,5,7,9,11,12]],
        ];
    }

    /**
     * @dataProvider provider
     * @param $a
     * @param $exp
     */
    public function testQuickSort($a, $exp)
    {
        $this->assertEquals($exp, QuickSort::sort($a));
//        $this->assertEquals($exp, QuickSort::sortSS($a));
    }

    /**
     * 冒泡排序
     * @dataProvider provider
     * @param $a
     * @param $exp
     */
    public function testBubbleSort($a, $exp) {
        $b = $a;
        BubbleSort::sort($a);
        $this->assertEquals($exp, $a);

        BubbleSort::sort($b);
        $this->assertEquals($exp, $b);
    }
}
