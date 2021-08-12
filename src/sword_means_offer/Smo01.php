<?php


namespace algo\sword_means_offer;


class Smo01
{
    public function solve($a)
    {
        if (!is_array($a)) {
            return false;
        }
        foreach ($a as $value) {
            if ($value < 0 || $value >= count($a)) {
                return false;
            }
        }
        for ($i = 0; $i < count($a);) {
            if ($a[$i] == $i) {
                $i++;
                continue;
            }
            $n = $a[$a[$i]];
            if ($n == $a[$i]) {
                return $n;
            }
            $a[$a[$i]] = $a[$i];
            $a[$i] = $n;
        }
        return false;
    }
}