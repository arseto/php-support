<?php
namespace Zerobit\Support\Exceptions;

class InternalException extends AppException
{
    public function toArray() : array
    {
        return [
            'dev_message' => $this->getMessage(),
            'user_message' => $this->getMessage(),
            'code' => 500,
            'more_info' => '@arseto',
        ];
    }
}

