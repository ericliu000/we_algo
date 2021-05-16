<?php


namespace algo\queue;


use algo\exception\QueueIsEmptyException;
use algo\linked_list\Node;

class LinkedListQueue implements QueueInterface
{
    /**
     * @var $head Node
     */
    private $head;
    /**
     * @var $tail Node
     */
    private $tail;

    private $size = 0;

    public function __construct()
    {
        $this->head = null;
        $this->tail = null;
        $this->size = 0;
    }

    function getSize(): int
    {
        return $this->size;
    }

    function isEmpty(): bool
    {
        return $this->size == 0;
    }

    function enqueue($e): void
    {
        if ($this->tail == null) {
            $this->tail = new Node($e);
            $this->head = $this->tail;
        } else {
            $this->tail->next = new Node($e);
            $this->tail = $this->tail->next;
        }
        $this->size++;
    }

    function dequeue()
    {
        if ($this->isEmpty()) {
            throw new QueueIsEmptyException();
        }
        $retCode = $this->head;
        $this->head = $retCode->next;
        $retCode->next = null;
        $this->size--;
        if ($this->head == null) {
            $this->tail == null;
        }
        return $retCode->e;
    }

    function getFront()
    {
        return $this->head->e;
    }

    public function __toString()
    {
        $arr = [];
        $head = $this->head;
        while ($head != null) {
            $arr[] = (string)$head;
            $head = $head->next;
        }
        return implode('->', $arr);
    }
}