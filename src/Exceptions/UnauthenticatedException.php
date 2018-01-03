<?php
namespace Zerobit\Support\Exceptions;

class UnauthenticatedException extends AppException
{
    public function toArray()
    {
        return [
            'dev_message' => $this->getMessage(),
            'user_message' => $this->getMessage(),
            'code' => 401,
            'more_info' => '@arseto',
        ];
    }
}

