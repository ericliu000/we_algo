<?php


namespace algo\sword_means_offer;


class Smo02
{
    public function solve($a)
    {
        if (!is_array($a)) {
            return -1;
        }
        foreach ($a as $value) {
            if ($value < 1 || $value > count($a) - 1) {
                return -1;
            }
        }

        $start = 1;
        $end = count($a) - 1;

        while ($end >= $start) {
            $middle = (($end - $start) >> 1) + $start;
            $countRange = $this->countRange($a, $start, $middle);

            if ($start == $end) {
                if ($countRange > 1) {
                    return $start;
                } else {
                    break;
                }
            }

            if ($countRange > $middle - $start + 1) {
                $end = $middle;
            } else {
                $start = $middle + 1;
            }
        }
        return -1;
    }

    private function countRange(array $a, int $start, int $end): int
    {
        $count = 0;
        foreach ($a as $value) {
            if ($value >= $start && $value <= $end) {
                $count++;
            }
        }
        return $count;
    }
}