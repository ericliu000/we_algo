<?php

namespace algo\heap;

use algo\exception\IllegalInputException;
use algo\sort\ArrSwapTrait;

/**
 * 大顶堆
 */
class MaxHeap implements HeapInterface
{
    use ArrSwapTrait;

    private array $content = [];
    private int $cap;
    private int $realSize = 0;

    public function __construct(int $cap) {
        if ($cap < 1) throw new IllegalInputException();
        $this->cap = $cap;
        $this->content[] = 0; //0 位置不使用，赋值默认值
    }

    public function add($element)
    {
        if ($this->realSize >= $this->cap) throw new IllegalInputException();
        $this->realSize++;

        $index = $this->realSize;
        $this->content[$index] = $element;
        $parent = intval($index / 2);

        while ($this->content[$index] > $this->content[$parent] && $index > 1) {
            self::swap($this->content, $index, $parent);
            $index = $parent;
            $parent = intval($index / 2);
        }
    }

    public function peek()
    {
        if ($this->isEmpty()) throw new IllegalInputException();
        return $this->content[1];
    }

    public function pop()
    {
        $removeElement = $this->peek();

        $this->content[1] = $this->content[$this->realSize];
        unset($this->content[$this->realSize]);
        $this->realSize--;

        $index = 1;

        while ($index <= intval($this->realSize / 2)) {
            $indexOfMaxChild = $this->indexOfCompareChild($this->content, $index);
            if ($this->content[$index] >= $this->content[$indexOfMaxChild]) break;
            self::swap($this->content, $index, $indexOfMaxChild);
        }

        return $removeElement;
    }

    public function toString()
    {

    }

    public function getSize()
    {
        return $this->realSize;
    }

    public function isEmpty()
    {
        return $this->getSize() === 0;
    }

    public function content()
    {
        return $this->content;
    }

    private function indexOfCompareChild($content, $index) {
        $left = $index * 2;
        $right = $left + 1;
        if ($right > count($content) -1) return $left;
        return $content[$left] > $content[$right] ? $left : $right;
    }
}