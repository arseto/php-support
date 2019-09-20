<?php

namespace Arseto\Support\Exceptions;

class NotFoundException extends AppException
{
    public function __construct($message = null, Exception $previous = null)
    {
        parent::__construct($message, 404, $previous);
    }
}



