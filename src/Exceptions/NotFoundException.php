<?php
namespace Zerobit\Support\Exceptions;

class NotFoundException extends AppException
{
    public function toArray() : array
    {
        return [
            'dev_message' => $this->getMessage(),
            'user_message' => $this->getMessage(),
            'code' => 404,
            'more_info' => '@arseto',
        ];
    }
}



