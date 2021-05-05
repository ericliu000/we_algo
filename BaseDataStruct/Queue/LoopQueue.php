<?php

/**
 * 循环队列
 *
 * Created by PhpStorm.
 * User: lio
 * Date: 2021/5/5
 * Time: 上午9:59
 */
class LoopQueue
{
    /*队列数组*/
    private $data = array();

    /*数组起始标记*/
    private $front,$tail;

    private $size;


    /*初始化数组*/
    public function __construct($initArray)
    {
        $this->data = $initArray;
        $this->size = count($initArray);

        $this->front = 0;
        $this->tail = $this->size - 1;
    }


    /*循环队列为空判断*/
    public function isEmpty(){
        return $this->front == $this->tail ? true : false;
    }


    /*获取循环队列长度*/
    public function getSize(){
        return $this->size;
    }


    /*循环队列入队 - 检查数组是否已满*/
    public function enaQueue($val){
        /*队列已满需要扩容*/
        if(($this->tail + 1) % $this->size == $this->front){
            $this->data[] = null;
            $this->size += 1;
            $this->tail += 1;
        }

        $this->data[$this->tail] = $val;
        return true;
    }

    /*循环队列出队*/
    public function deQueue(){
        if($this->isEmpty()) return null;

        $res = $this->data[$this->front];

        /*front 向下移动*/
        $this->front = ($this->front + 1) % $this->size;
        $this->size--;

        $this->data[$this->front] = null;

        return $res;
    }
}