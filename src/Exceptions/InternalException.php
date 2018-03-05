<?php
namespace Zerobit\Support\Exceptions;

class InternalException extends AppException
{
    public function __construct($message = null, Exception $previous = null)
    {
        parent::__construct($message, 500, $previous);
    }
}

