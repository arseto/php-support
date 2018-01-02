<?php

use Zerobit\Support\Enum;
use Zerobit\Support\Exceptions\ValidationException;

class EnumTest extends PHPUnit\Framework\TestCase
{
    /** @test */
    public function shouldCreateEnum()
    {
        $enum = new EnumImpl('001');
        $this->assertEquals('001', $enum);
    }

    /** @test */
    public function shouldGetAllValues()
    {
        $all = EnumImpl::all();

        $this->assertTrue(in_array('001', $all));
        $this->assertTrue(in_array('002', $all));
        $this->assertFalse(in_array('003', $all));
    }

    /** @test */
    public function shouldInvalidValue()
    {
        $this->expectException(ValidationException::class);
        $enum = new EnumImpl('101');
    }
}

class EnumImpl extends Enum
{
    const VALUE1 = '001';
    const VALUE2 = '002';
}
