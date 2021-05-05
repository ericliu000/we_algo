<?php

/**
 * 用队列实现栈
 *
 *
 * 用两个队列实现栈,一个负责入栈 一个负责出栈
 *
 * Created by PhpStorm.
 * User: lio
 * Date: 2021/5/5
 * Time: 上午10:37
 */
class MyStack
{
    public $queue1;
    public $queue2;


    /*入栈*/
    public function push($val){
        $this->queue2[] = $val;
    }

    /*出栈*/
    public function pop(){
        if($this->queue1) return array_pop($this->queue1);

        while($item = array_pop($this->queue2)){
            $this->queue1[] = $item;
        }

        return array_pop($this->queue1);
    }

    /*查看栈顶部元素*/
    public function top(){
        return end($this->queue1);
    }

    /*检查栈为空*/
    public function isEmpty(){
        return empty($this->queue1) && empty($this->queue2);
    }
}
