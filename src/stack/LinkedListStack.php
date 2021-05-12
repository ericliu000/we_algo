<?php


namespace algo\stack;


use algo\linked_list\LinkedList;
use algo\linked_list\Node;

class LinkedListStack implements StackInterface
{
    /**
     * @var LinkedList
     */
    private $linkedList;

    public function __construct()
    {
        $this->linkedList = new LinkedList();
    }

    function getSize(): int
    {
        return $this->linkedList->getSize();
    }

    function push($e): bool
    {
        return $this->linkedList->addFirst($e);
    }

    function pop()
    {
        $first = $this->linkedList->getFirst();
        $this->linkedList->removeFirst();
        return $first;
    }

    function peek()
    {
        return $this->linkedList->getFirst();
    }

    function isEmpty(): bool
    {
        return $this->linkedList->isEmpty();
    }

    function __toString(): string
    {
        return (string)$this->linkedList;
    }
}