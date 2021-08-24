<?php

namespace algo\queue;

interface DequeueInterface
{
    function getSize(): int;

    function isEmpty(): bool;

    function addFirst($e): void;

    function addLast($e): void;

    function removeFirst();

    function removeLast();

    function peekFirst();

    function peekLast();

    //获取内部结构
    function getContent();
}