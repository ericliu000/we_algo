<?php

/**
 * 二分查找法
 *
 * Created by PhpStorm.
 * User: lio
 * Date: 2021/5/31
 * Time: 下午9:47
 */
class BinarySearch
{
    public $arr = [1,2,3,4,5,6,7,8];

    public $target = 6;


    public function run(){
        /*递归实现*/
        return $this->search(0,count($this->arr)-1);

        /*非递归实现*/
    }


    /**
     * 二分查找法-递归
     *
     * @param $left
     * @param $right
     * @return float|int
     */
    public function search($left,$right){
        if($left > $right) return -1;

        $mid = floor(($right + $left) / 2);
        echo json_encode([$left,$right,$mid]) . PHP_EOL;
        sleep(1);

        if($this->arr[$mid] > $this->target){
            return $this->search($left,$mid-1);
        }elseif($this->arr[$mid] < $this->target){
            return $this->search($mid + 1,$right);
        }else{
            return $mid;
        }
    }
}

$binarySearch = new BinarySearch();
echo $binarySearch->run() . PHP_EOL;