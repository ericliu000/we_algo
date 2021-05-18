<?php

// 假设把某股票的价格按照时间先后顺序存储在数组中，请问买卖该股票一次可能获得的最大利润是多少？
//    输入: [7,1,5,3,6,4]
//    输出: 5
//    解释: 在第 2 天（股票价格 = 1）的时候买入，在第 5 天（股票价格 = 6）的时候卖出，最大利润 = 6-1 = 5 。
//    注意利润不能是 7-1 = 6, 因为卖出价格需要大于买入价格。

/**
 *
 * Created by PhpStorm.
 * User: lio
 * Date: 2021/5/18
 * Time: 下午9:40
 */
class 股票的最大利润
{
    /**
     * 动态规划 通过标记最小值
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $len = count($prices);

        // 动态规划数组，每个元素记录卖出赚到的最大利润
        $dArray[0] = 0;

        // 记录最小值
        $minVal = $prices[0];
        for($i = 1;$i < $len; $i++){
            if($prices[$i] < $minVal){
                $minVal = $prices[$i];
                $dArray[$i] = 0;
            }else{
                $dArray[$i] = $prices[$i] - $minVal;
            }
        }

        return max($dArray);
    }
}

$ob = new 股票的最大利润();
echo $ob->maxProfit([7,1,5,3,6,4]);