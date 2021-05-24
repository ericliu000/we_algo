<?php

/**
 * 归并排序
 *
 * 利用分治思想和递归函数
 *
 * 同类拓展题: 剑指 Offer 53 - II 0～n-1中缺失的数字
 *
 * Created by PhpStorm.
 * User: lio
 * Date: 2021/5/19
 * Time: 上午8:34
 */
class MergeSort
{
    public $arr = [3,2,7,6,1,8,6,9];

    /**
     * 归并排序 = 递归+合并
     *
     * @return array
     */
    public function sort(){
        $this->recursion(0,count($this->arr)-1);

        return $this->arr;
    }

    /**
     * 递归
     *
     * @param $left
     * @param $right
     */
    public function recursion($left,$right){
        if($left >= $right) return;

        $middle = floor(($right + $left) / 2);

        $this->recursion($left,$middle);
        $this->recursion($middle+1,$right);

        $this->merge($left,$middle,$right);
    }


    /**
     * 合并
     *
     * @param $left
     * @param $middle
     * @param $right
     */
    public function merge($left,$middle,$right){
        $mergeArr1 = array_slice($this->arr,$left,($middle - $left + 1));
        $mergeArr2 = array_slice($this->arr,$middle+1,($right - $middle));

        echo json_encode([$this->arr,$mergeArr1,$mergeArr2]) . PHP_EOL;
        sleep(1);
        $startMergeIndex = $left;
        while($mergeArr1 || $mergeArr2){
            // 把最小的值依次进行归并
            if(!empty($mergeArr1) && !empty($mergeArr2)){
                $this->arr[$startMergeIndex] = $mergeArr1[0] < $mergeArr2[0]
                    ? array_shift($mergeArr1)
                    : array_shift($mergeArr2);
            }else{
                if(empty($mergeArr1)) {
                    $this->arr[$startMergeIndex] = array_shift($mergeArr2);
                }elseif(empty($mergeArr2)){
                    $this->arr[$startMergeIndex] = array_shift($mergeArr1);
                }
            }
            $startMergeIndex++;
        }
    }
}

$sort = new MergeSort();
echo json_encode($sort->sort());