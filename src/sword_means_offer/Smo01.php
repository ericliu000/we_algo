<?php


namespace algo\sword_means_offer;


class Smo01
{
    public function solve($a)
    {
        if (!is_array($a)) {
            return false;
        }
        for ($i = 0; $i < count($a); ) {
            if ($a[$i] != $i) {
                $n = $a[$a[$i]];
                if ($n == $a[$i]) {
                    return $n;
                } else {
                    $a[$a[$i]] = $a[$i];
                    $a[$i] = $n;
                }
            } else {
                $i++;
            }
        }
        return false;
    }
}