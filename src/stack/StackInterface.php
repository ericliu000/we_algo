<?php


namespace algo\stack;


interface StackInterface
{
    function getSize(): int;

    function push($e): bool;

    function pop();

    function peek();

    function isEmpty(): bool;

    function __toString(): string ;
}