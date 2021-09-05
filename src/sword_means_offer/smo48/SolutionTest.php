<?php

namespace algo\sword_means_offer\smo48;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function provider(): array
    {
        return [
            ['abba', 2],
            ['abcabcbb', 3],
            ['pwwkew', 3],
            ['bbbbb', 1],
            ['', 0],
        ];
    }

    /**
     * @dataProvider provider
     * @param $a
     * @param $b
     */

    public function testLengthOfLongestSubstring($a, $exp)
    {
        $sol = new Solution();
        $this->assertEquals($exp, $sol->lengthOfLongestSubstring($a));
        $this->assertEquals($exp, $sol->lengthOfLongestSubstring2($a));
    }
}
