<?php

namespace algo\sword_means_offer\smo66;

class Solution
{
    /**
     * 剑指 Offer 66. 构建乘积数组
     * @link https://leetcode-cn.com/problems/gou-jian-cheng-ji-shu-zu-lcof/
     * @param Integer[] $a
     * @return Integer[]
     */
    function constructArr($a) {
        if (!is_array($a)|| count($a) === 0) return [];
        if (count($a) === 1) return [0];
        $res[0] = 1;
        for($i=1; $i<count($a); $i++) {
            $res[$i] = $res[$i-1] * $a[$i-1];
        }
        $r = 1;
        for($i=count($a)-2; $i>=0; $i--) {
            $r = $r * $a[$i+1];
            $res[$i] =  $res[$i] * $r;
        }
        return $res;
    }

}