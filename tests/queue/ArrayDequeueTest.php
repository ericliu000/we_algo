<?php

namespace queue;

use algo\queue\ArrayDequeue;
use PHPUnit\Framework\TestCase;

class ArrayDequeueTest extends TestCase
{

    public function testFunc()
    {
        $deque = new ArrayDequeue();
        $this->assertEquals(0, $deque->getSize());

        $deque->addLast(2);
        $this->assertEquals([2], $deque->getContent());

        $deque->addFirst(1);
        $this->assertEquals([1, 2], $deque->getContent());

        $this->assertEquals(1, $deque->popFirst());
        $this->assertEquals(2, $deque->popLast());

        $deque->addFirst(100);
        $deque->addFirst(99);
        $this->assertEquals(99, $deque->peekFirst());
        $this->assertEquals(100, $deque->peekLast());
    }
}
