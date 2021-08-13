<?php


namespace algo\sword_means_offer;


class Smo03
{
    public function solve($matrix, $row, $column, $target): bool
    {
        if (!is_array($matrix) || count($matrix) != $row) {
            return false;
        }
        foreach ($matrix as $item) {
            if (count($item) != $column) {
                return false;
            }
        }

        $i = 0;
        $j = $column - 1;

        while ($i <= $row -1 && $j >= 0) {
            if ($matrix[$i][$j] == $target) {
                return true;
            } else if ($matrix[$i][$j] > $target) {
                $j--;
            } else {
                $i++;
            }
        }
        return false;
    }
}
// 变化因子：行 从0 到最大，列从最大到0
// 临界条件：行大于最大或者列小于0