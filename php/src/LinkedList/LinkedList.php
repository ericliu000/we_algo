<?php

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
        return $this->e->toString();
    }
}


class LinkedList
{
    /** @var Node */
    private $head;
    private $size;

    public function __construct()
    {
        $this->head = null;
        $this->size = 0;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function isEmpty()
    {
        return $this->size == 0;
    }

    public function addFirst($e)
    {
//        $node = new Node($e);
//        $node->next = $this->head;
//        $this->head = $node;

        $this->head = new Node($e, $this->head);
        $this->size++;
    }

    public function add($index, $e)
    {
        if ($index < 0 || $index > $this->size) {
            throw new \Exception('illegal index');
        }
        if ($index == 0) {
            $this->addFirst($e);
        } else {
            $prev = $this->head;
            for ($i = 0; $i < $this->size - 1; $i++) {
                $prev = $prev->next;
                $prev->next = new Node($e, $prev->next);
                $this->size++;
            }
        }
    }

    public function addLast($e)
    {
        $this->add($this->size, $e);
    }
}