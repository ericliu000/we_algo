<?php

namespace algo\queue;

/**
 * 双端队列
 * double-ended queue
 */
class ArrayDequeue implements DequeueInterface
{
    private array $content = [];

    function getSize(): int
    {
        return count($this->content);
    }

    function isEmpty(): bool
    {
        return $this->getSize() === 0;
    }

    function addFirst($e): void
    {
        array_unshift($this->content, $e);
    }

    function addLast($e): void
    {
        $this->content[] = $e;
    }

    function popFirst()
    {
        return array_shift($this->content);
    }

    function popLast()
    {
        return array_pop($this->content);
    }

    function peekFirst()
    {
        if ($this->isEmpty()) return null;
        return $this->content[0];
    }

    function peekLast()
    {
        if ($this->isEmpty()) return null;
        return $this->content[$this->getSize()-1];
    }

    function getContent()
    {
        return $this->content;
    }
}