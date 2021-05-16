<?php


use algo\stack\ArrayStack;
use algo\stack\StackInterface;
use PHPUnit\Framework\TestCase;

class ArrayStackTest extends TestCase
{
    /**
     * @return ArrayStack
     * @var $stack StackInterface
     */
    public function testPush()
    {
        $stack = new ArrayStack();
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
