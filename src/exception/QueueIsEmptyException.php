<?php


namespace algo\exception;


class QueueIsEmptyException extends \Exception
{
    const MESSAGE_PREFIX = 'queue is empty';
    public function __construct()
    {
        parent::__construct(self::MESSAGE_PREFIX);
    }
}