<?php

namespace algo\queue;

class ArrayQueue implements QueueInterface
{
    private $queue = [];

    function getSize(): int
    {
        return count($this->queue);
    }

    function isEmpty(): bool
    {
        return count($this->queue) === 0;
    }

    function enqueue($e): void
    {
        $this->queue[] = $e;
    }

    function dequeue()
    {
        if (!$this->isEmpty()) {
            return array_shift($this->queue);
        }
        return false;
    }

    function getFront()
    {
        if (!$this->isEmpty()) {
            return $this->queue[0];
        }
        return false;
    }

    function getQueue() {
        return $this->queue;
    }
}