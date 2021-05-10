<?php

namespace algo\linked_list;

use algo\exception\IllegalIndexException;

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
            throw new IllegalIndexException($index);
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

    public function remove(int $index)
    {
        if ($index < 0 || $index > $this->size) {
            throw new IllegalIndexException($index);
        }
        $prev = $this->dummyHead;
        for ($i = 0; $i < $index; $i++) {
            $prev = $prev->next;
        }
        $delNode = $prev->next;
        $prev->next = $delNode->next;
        $delNode->next = null;
        $this->size--;
        return $this;
    }

    public function removeFirst()
    {
        return $this->remove(0);
    }

    public function removeLast()
    {
        return $this->remove($this->size-1);
    }
}
