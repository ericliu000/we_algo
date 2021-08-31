<?php
namespace algo\heap;

//「最大堆」的实现
interface HeapInterface {

    // 添加元素函数
    public function add($element);
    // 获取堆顶元素函数
    public function peek();
    // 删除堆顶元素函数
    public function pop();
    // 返回「堆」的元素个数
    public function getSize();
    public function isEmpty();

    public function toString();
}
