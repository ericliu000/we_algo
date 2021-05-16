<?php


use algo\stack\LinkedListStack;
use algo\stack\StackInterface;
use PHPUnit\Framework\TestCase;

class LinkedListStackTest extends TestCase
{
    /**
     * @return LinkedListStack
     * @var $stack StackInterface
     */
    public function testPush()
    {
        $stack = new LinkedListStack();
        $stack->push(123);
        $stack->push(456);
        $this->assertSame('456 123', (string)$stack);

        return $stack;
    }

    /**
     * @depends testPush
     * @param $stack StackInterface
     */
    public function testPop($stack)
    {
        $this->assertEquals('456', $stack->pop());
        $this->assertEquals('123', (string)$stack);
    }
}
