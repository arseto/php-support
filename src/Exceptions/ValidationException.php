<?php

namespace Arseto\Support\Exceptions;

class ValidationException extends AppException
{
    public function __construct($message = null, Exception $previous = null)
    {
        parent::__construct($message, 422, $previous);
    }
}

