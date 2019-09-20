<?php

namespace Arseto\Support\Exceptions;

use Arseto\Support\Arrayable;

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

