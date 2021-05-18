<?php

class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function maxValue($grid) {
        $row = count($grid);
        $col = count($grid[0]);

        // 二维数组动态规划
        $dArray[0][0] = $grid[0][0];

        // 遍历行
        for($i = 1;$i < $col; $i++){
            $dArray[0][$i] = $grid[0][$i] + $dArray[0][$i-1];
        }

        // 遍历列
        for($i = 1;$i < $row; $i++){
            $dArray[$i][0] = $grid[$i][0] + $dArray[$i-1][0];
        }


        // 遍历全表取最大值
        for($i = 1;$i < $row; $i++){
            for($j = 1;$j < $col; $j++){
                $dArray[$i][$j] = max($dArray[$i-1][$j],$dArray[$i][$j-1]) + $grid[$i][$j];
            }
        }

        // 取最后一个值
        return $dArray[$row-1][$col-1];
    }
}


class Solution2 {

    /**
     * 动态规划 + 哈希表
     *
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $sArr = str_split($s);
        $len = count($sArr);

        $res = 0;

        // hash 表
        $hashArr = array();
        for($i = 0;$i < $len; $i++){
            if(isset($hashArr[$sArr[$i]])){
                $index = $hashArr[$sArr[$i]];
                $res = max($res,$i - $index);
                $hashArr[$sArr[$i]] =  $i;
            }else{
                $res += 1;
            }
        }

        return $res;
    }
}



//[
//    [1,3,7],
//    [4,6,8]
//]
//$solution = new Solution2();
//$aa = [[1,4,8,6,2,2,1,7],[4,7,3,1,4,5,5,1],[8,8,2,1,1,8,0,1],[8,9,2,9,8,0,8,9],[5,7,5,7,1,8,5,5],[7,0,9,4,5,6,5,6],[4,9,9,7,9,1,9,0]];
//echo $solution->maxValue($aa);

$solution = new Solution2();
$aa = "abcabcbb";
echo $solution->lengthOfLongestSubstring($aa);
