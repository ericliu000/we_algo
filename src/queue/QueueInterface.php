<?php


namespace algo\queue;


interface QueueInterface
{
    function getSize(): int ;
    function isEmpty(): bool ;
    function enqueue($e): void ;
    function dequeue();
    function getFront();

}