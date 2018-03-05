<?php
namespace Zerobit\Support\Exceptions;

use Zerobit\Support\Arrayable;

abstract class AppException extends \Exception implements Arrayable
{
    public function toArray() : array
    {
        return [
            'dev_message' => $this->getMessage(),
            'user_message' => $this->getMessage(),
            'code' => $this->code,
            'more_info' => '@arseto',
        ];
    }
}

