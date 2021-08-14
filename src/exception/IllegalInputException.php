<?php


namespace algo\exception;


class IllegalInputException extends \Exception
{
    const MESSAGE_PREFIX = 'illegal input.';
    public function __construct()
    {
        parent::__construct(self::MESSAGE_PREFIX);
    }
}