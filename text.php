<?php

class Solution {

    public $sum = 0;

    /**
     * @param Integer $n
     * @return Integer
     */
    function sumNums($n) {
        $this->helper($n);

        return $this->sum;
    }

    function helper($n){
        if($n == 0) return $this->sum;

        $this->sum += $n;
        $this->sumNums($n-1);
    }
}

$Solution = new Solution();
$res = $Solution->sumNums(9);

echo json_encode($res);
