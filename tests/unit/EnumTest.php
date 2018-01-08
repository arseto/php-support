<?php

use Zerobit\Support\Enum;
use Zerobit\Support\Exceptions\ValidationException;

class EnumTest extends PHPUnit\Framework\TestCase
{
    /** @test */
    public function shouldCreateEnum()
    {
        $enum = new EnumImpl('VALUE001');
        $this->assertEquals('VALUE001', $enum);
    }

    /** @test */
    public function shouldGetAllValues()
    {
        $all = EnumImpl::all();

        $this->assertTrue(in_array('VALUE001', $all));
        $this->assertTrue(in_array('VALUE002', $all));
        $this->assertFalse(in_array('VALUE003', $all));
    }

    /** @test */
    public function shouldInvalidValue()
    {
        $this->expectException(ValidationException::class);
        $enum = new EnumImpl('101');
    }

    /** @test */
    public function shouldCreateLowerEnum()
    {
        $enum = new LowerEnumImpl('value01');
        $this->assertEquals('value01', $enum);

        $enum = new LowerEnumImpl('VALUE02');
        $this->assertEquals('value02', $enum);
    }
}

class EnumImpl extends Enum
{
    const VALUE1 = 'VALUE001';
    const VALUE2 = 'VALUE002';
}

class LowerEnumImpl extends Enum
{
    const VALUE1 = 'value01';
    const VALUE2 = 'value02';

    public function __construct($value)
    {
        parent::__construct($value, true);
    }
}
