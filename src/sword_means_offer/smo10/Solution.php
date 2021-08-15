<?php

namespace algo\sword_means_offer\smo10;

class Solution
{
    /**
     * @link https://leetcode-cn.com/problems/fei-bo-na-qi-shu-lie-lcof/solution/mian-shi-ti-10-i-fei-bo-na-qi-shu-lie-dong-tai-gui/
     * 转移方程： dp[i + 1] = dp[i] + dp[i - 1]dp[i+1]=dp[i]+dp[i−1] ，即对应数列定义 f(n + 1) = f(n) + f(n - 1)f(n+1)=f(n)+f(n−1) ；
     * @video https://www.bilibili.com/video/BV1bQ4y1K7EB 小美算法
     * @param $n
     */
    /**
     * @param Integer $n
     * @return Integer
     */
    function fib($n)
    {
        if ($n === 0 || $n === 1) {
            return $n;
        }
        $fn2 = 0;
        $fn1 = 1;
        $fn = 0;
        for ($i = 2; $i <= $n; $i++) {
            $fn = ($fn2 + $fn1) % 1000000007;
            $fn2 = $fn1;
            $fn1 = $fn;
        }
        return $fn;
    }
}