<?php

namespace Arseto\Support;

abstract class DataAdapter implements \ArrayAccess, Arrayable
{
    private $data = array();

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function offsetExists($offset)
    {
        return isset($this->data[$offset]);
    }

    public function offsetGet($offset)
    {
        return isset($this->data[$offset]) ?
            $this->data[$offset] : null;
    }

    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->data[] = $value;
        } else {
            $this->data[$offset] = $value;
        }
    }

    public function offsetUnset($offset)
    {
        unset($this->data[$offset]);
    }

    public function __get($property)
    {
        if (isset($this->data[$property])) {
            return $this->data[$property];
        }
        return null;
    }

    public function empty()
    {
        return empty($this->data);
    }

    public function toArray() : array
    {
        return $this->data;
    }
}

