<?php
namespace Zerobit\Support\Exceptions;

class NotFoundException extends AppException
{
    public function __construct($message = null, Exception $previous = null)
    {
        parent::__construct($message, 404, $previous);
    }
}



