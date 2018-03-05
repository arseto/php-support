<?php
namespace Zerobit\Support\Exceptions;

class ValidationException extends AppException
{
    public function toArray() : array
    {
        return [
            'dev_message' => $this->getMessage(),
            'user_message' => $this->getMessage(),
            'code' => 422,
            'more_info' => '@arseto',
        ];
    }
}

