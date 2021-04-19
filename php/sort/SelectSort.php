<?php

/**
 * 选择排序
 */

function findIndexOfMinNum($arr, $start)
{
    if ($start >= count($arr)) {
        throw new Exception('下标超出范围');
    }
    $iMin = $start;
    for ($i = $start; $i < count($arr); $i++) {
        if ($arr[$i] < $arr[$iMin]) {
            $iMin = $i;
        }
    }
    return $iMin;
}

function swap($arr, $x, $y)
{
    if ($x == $y) {
        return $arr;
    }
    $tmp = $arr[$x];
    $arr[$x] = $arr[$y];
    $arr[$y] = $tmp;
    return $arr;
}

$arr = [6, 4, 2, 3, 1, 5];
for ($i = 0; $i < count($arr); $i++) {
    $iMin = findIndexOfMinNum($arr, $i);
    $arr = swap($arr, $iMin, $i);
}

print_r($arr);

