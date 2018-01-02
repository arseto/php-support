<?php

use Faker\Factory as Faker;
use Zerobit\Support\Exceptions\ValidationException;

class ValidationExceptionTest extends PHPUnit\Framework\TestCase
{
    private $faker;

    protected function setup()
    {
        $this->faker = Faker::create();
    }

    /** @test */
    public function shouldConvertToArray()
    {
        $e = new ValidationException(
            $message = $this->faker->sentence
        );

        $this->assertEquals($message, $e->getMessage());

        $array = $e->toArray();
        $this->assertEquals($message, $array['dev_message']);
        $this->assertEquals($message, $array['user_message']);
        $this->assertEquals(422, $array['code']);
    }
}

