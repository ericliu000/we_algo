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

function findIndexOfMinNum2($arr, $end)
{
    $iMax = 0;
    for ($i = 0; $i <= $end; $i++) {
        if ($arr[$i] > $arr[$iMax]) {
            $iMax = $i;
        }
    }
    return $iMax;
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


$arr2 = [6, 4, 2, 3, 1, 5];
for ($i = count($arr2)-1; $i > 0; $i--) {
    $iMax = findIndexOfMinNum2($arr2, $i);
    $arr2 = swap($arr2, $iMax, $i);
}
print_r($arr2);
