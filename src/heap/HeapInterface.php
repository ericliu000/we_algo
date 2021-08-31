<?php
namespace algo\heap;

/**
 * 教程：https://leetcode-cn.com/leetbook/read/heap/e2f3ce/
 * PHP内置的标准库已经帮助我实现了堆，你可以通过SplHeap、SplMinHeap、SplMaxHeap来使用它们。
 * 堆 是一种特别的二叉树，满足以下条件的二叉树，可以称之为 堆：
   - 完全二叉树；
   - 每一个节点的值都必须 大于等于或者小于等于 其孩子节点的值。
 * 堆 在计算机中的应用场景是非常广泛的。在本章节中，你将学到 堆 的以下几个应用：
   - 堆排序
   - Top K 问题 （topK大问题既可以用最大堆也可以用最小堆）
   - The Kth 问题
 *
 */
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
