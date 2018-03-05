<?php
namespace Zerobit\Support\Exceptions;

use Zerobit\Support\Arrayable;

abstract class AppException extends \Exception implements Arrayable
{
    public abstract function toArray() : array;
}

