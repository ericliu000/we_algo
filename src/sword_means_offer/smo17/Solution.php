<?php

namespace algo\sword_means_offer\smo17;

class Solution
{

    /**
     * @link https://leetcode-cn.com/problems/da-yin-cong-1dao-zui-da-de-nwei-shu-lcof/
     * 剑指 Offer 17. 打印从1到最大的n位数
     * @param Integer $n
     * @return Integer[]
     */
    function printNumbers($n)
    {
        $res = [];
        $maxValue = pow(10, $n);
        for ($i = 1; $i < $maxValue; $i++) {
            $res[] = $i;
        }
        return $res;
    }
}