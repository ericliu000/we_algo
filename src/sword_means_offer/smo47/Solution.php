<?php

namespace algo\sword_means_offer\smo47;

class Solution
{

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function maxValue($grid)
    {
        //初始 dp[-1][0] = 0; dp[0][-1] = 0;
        //方程 dp[i][j] = grid[i][j] + max(dp[i-1][j], dp[i][j-1])
        if (count($grid) === 0) return 0;
        $dp = [];
        for ($i = 0; $i < count($grid); $i++) {
            for ($j = 0; $j < count($grid[0]); $j++) {
                $dp[$i][$j] = $grid[$i][$j] + max(
                        $i - 1 < 0 ? 0 : $dp[$i - 1][$j], $j - 1 < 0 ? 0 : $dp[$i][$j - 1]);
            }
            return $dp[$i - 1][$j - 1];
        }
    }
}