<?php


use algo\queue\LinkedListQueue;
use PHPUnit\Framework\TestCase;

class LinkedListQueueTest extends TestCase
{
    public function testEnqueue()
    {
        $llq = new LinkedListQueue();
        $llq->enqueue(123);
        $llq->enqueue(456);
        $this->assertEquals('123->456', (string)$llq);
    }

}
