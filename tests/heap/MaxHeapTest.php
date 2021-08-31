<?php

namespace heap;

use algo\heap\MaxHeap;
use algo\heap\MinHeap;
use PHPUnit\Framework\TestCase;

class MaxHeapTest extends TestCase
{
    public function testMaxHeap()
    {
        $maxHeap = new MaxHeap(5);
        $maxHeap->add(1);
        $maxHeap->add(2);
        $maxHeap->add(3);
        $this->assertEquals([0, 3, 1, 2], $maxHeap->content());
        $this->assertEquals(3, $maxHeap->getSize());

        $this->assertEquals(3, $maxHeap->peek());
        $this->assertEquals(3, $maxHeap->pop());
        $this->assertEquals(2, $maxHeap->pop());
    }

    public function testMinHeap()
    {
        $maxHeap = new MinHeap(5);
        $maxHeap->add(3);
        $maxHeap->add(1);
        $maxHeap->add(2);
        $this->assertEquals([0, 1, 3, 2], $maxHeap->content());
        $this->assertEquals(3, $maxHeap->getSize());

        $this->assertEquals(1, $maxHeap->peek());
        $this->assertEquals(1, $maxHeap->pop());
        $this->assertEquals(2, $maxHeap->pop());
    }
}
