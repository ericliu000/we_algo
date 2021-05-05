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
class Queue2Stack
{
    public $queue;

    /*入栈*/
    public function push($val){
        $this->queue[] = $val;
    }

    /*出栈*/
    public function pop(){

        return array_pop($this->queue);
    }

    /*查看栈顶部元素*/
    public function top(){
        return end($this->queue);
    }

    /*检查栈为空*/
    public function isEmpty(){
        return empty($this->queue);
    }
}
