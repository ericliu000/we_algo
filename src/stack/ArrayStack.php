<?php


namespace algo\stack;


use algo\linked_list\Node;

class ArrayStack implements StackInterface
{
    private $arr = [];

    function getSize(): int
    {
        return count($this->arr);
    }

    function push($e): bool
    {
        return array_push($this->arr, $e);
    }

    function pop()
    {
        return array_pop($this->arr);
    }

    function peek()
    {
        return end($this->arr);
    }

    function isEmpty(): bool
    {
        return empty($this->arr);
    }

    function __toString(): string
    {
        return implode(' ', array_reverse($this->arr));
    }
}