<?php

namespace algo;

use algo\exception\IllegalIndexException;

class Node
{
    public $e;
    public $next;

    public function __construct($e = null, $next = null)
    {
        $this->e = $e;
        $this->next = $next;
    }

    public function __toString()
    {
        return (string)$this->e;
    }
}


class LinkedList
{
    /** @var Node */
    private $dummyHead;
    private $size;

    public function __construct()
    {
        $this->dummyHead = new Node();
        $this->size = 0;
    }

    public function __toString()
    {
        $arr = [];
        $head = $this->dummyHead;
        while ($head->next != null) {
            $head = $head->next;
            $arr[] = (string)$head;
        }
        return implode(' ', $arr);
    }

    public function getSize()
    {
        return $this->size;
    }

    public function isEmpty()
    {
        return $this->size == 0;
    }

    public function add($index, $e)
    {
        if ($index < 0 || $index > $this->size) {
            throw new \Exception('illegal index:' . $index);
        }

        $prev = $this->dummyHead;
        for ($i = 0; $i < $index; $i++) {
            $prev = $prev->next;
        }
        $prev->next = new Node($e, $prev->next);
        $this->size++;
    }

    public function addFirst($e)
    {
        $this->add(0, $e);
    }

    public function addLast($e)
    {
        $this->add($this->size, $e);
    }

    public function get($index)
    {
        if ($index < 0 || $index > $this->size) {
            throw new IllegalIndexException($index);
        }
        $cur = $this->dummyHead->next;
        for ($i = 0; $i < $index; $i++) {
            $cur = $cur->next;
        }
        return $cur;
    }

    public function getFirst()
    {
        return $this->get(0);
    }
    public function getLast()
    {
        return $this->get($this->size);
    }
}
