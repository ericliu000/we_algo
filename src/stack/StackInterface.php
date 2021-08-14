<?php


namespace algo\stack;

interface StackInterface
{
    function getSize(): int;

    function push($e): bool;

    function pop();

    function peek();//查看栈顶元素

    function isEmpty(): bool;

    function __toString(): string;
}