<?php

namespace Zerobit\Support;

use Zerobit\Support\Exceptions\ValidationException;

abstract class Enum
{
    protected $value;
    protected $lowerCase;

    public function __construct(string $value, bool $lowerCase = false)
    {
        $this->lowerCase = $lowerCase;
        $this->validate($value);
        $this->value = $this->adjustCase($value);
    }

    private function adjustCase($value)
    {
        return $this->lowerCase ? strtolower($value) : strtoupper($value);
    }

    private function validate($value)
    {
        $obj = new \ReflectionClass(get_called_class());
        $constants = $obj->getConstants();
        $valid = in_array($this->adjustCase($value), $constants);
        if (!$valid) {
            throw new ValidationException(
                'Value not allowed for ' . get_called_class()
            );
        }
    }

    public static function all()
    {
        $class = get_called_class();
        $obj = new \ReflectionClass($class);
        $constants = $obj->getConstants();

        $all = [];
        foreach ($constants as $constant) {
            $item = new $class($constant);
            $all[] = $item;
        }
        return $all;
    }

    public function value() : string
    {
        return $this->value;
    }

    public function __toString()
    {
        return $this->value();
    }
}
