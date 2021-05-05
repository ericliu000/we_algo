<?php

/**
 * 用栈实现队列
 * 
 * Created by PhpStorm.
 * User: lio
 * Date: 2021/5/5
 * Time: 上午10:47
 */
class Stack2Queue
{
    public $stack1;
    public $stack2;


    /*入队*/
    public function push($val){
        $this->stack2[] = $val;
    }

    /*出队*/
    public function shift(){
        if($this->stack1) return array_pop($this->stack1);

        while($item = array_pop($this->stack2)){
            $this->stack1[] = $item;
        }

        return array_pop($this->stack1);
    }

    /*查看队列部元素*/
    public function top(){
        return end($this->stack1);
    }

    /*检查栈为空*/
    public function isEmpty(){
        return empty($this->stack1) && empty($this->stack2);
    }
}