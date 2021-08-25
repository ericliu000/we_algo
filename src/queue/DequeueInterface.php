<?php

namespace algo\queue;

interface DequeueInterface
{
    function getSize(): int;

    function isEmpty(): bool;

    function addFirst($e): void;

    function addLast($e): void;

    function popFirst();

    function popLast();

    function peekFirst();

    function peekLast();

    //获取内部结构
    function getContent();
}