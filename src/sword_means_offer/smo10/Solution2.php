<?php

namespace algo\sword_means_offer\smo10;

class Solution2
{

    /**
     * @param Integer $n
     * @return Integer
     */
    function numWays($n)
    {
        // n fn
        // 0 1
        // 1 1
        // 2 1+1
        // 3 2+1
        // 4 3+2
        // fn f(n-1)+f(n-2)
        if ($n === 0) {
            return 1;
        }
        if ($n === 1) {
            return 1;
        }

        $fn_1 = $fn_2 = 1;
        $fn = 0;//初始值
        for ($i = 2; $i <= $n; $i++) {
            $fn = ($fn_1 + $fn_2) % 1000000007;
            $fn_2 = $fn_1;
            $fn_1 = $fn;
        }
        return $fn;
    }

}