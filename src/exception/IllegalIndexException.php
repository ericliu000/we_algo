<?php


namespace algo\exception;


class IllegalIndexException extends \Exception
{
    const MESSAGE_PREFIX = 'illegal index:';
    public function __construct($index)
    {
        parent::__construct(self::MESSAGE_PREFIX . $index);
    }
}