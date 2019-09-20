<?php

namespace Arseto\Support\Exceptions;

class UnauthenticatedException extends AppException
{
    public function __construct($message = null, Exception $previous = null)
    {
        parent::__construct($message, 401, $previous);
    }
}

