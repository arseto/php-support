<?php

use Faker\Factory as Faker;
use Arseto\Support\Exceptions\NotFoundException;

class NotFoundExceptionTest extends PHPUnit\Framework\TestCase
{
    private $faker;

    protected function setup()
    {
        $this->faker = Faker::create();
    }

    /** @test */
    public function shouldConvertToArray()
    {
        $e = new NotFoundException(
            $message = $this->faker->sentence
        );

        $this->assertEquals($message, $e->getMessage());

        $array = $e->toArray();
        $this->assertEquals($message, $array['dev_message']);
        $this->assertEquals($message, $array['user_message']);
        $this->assertEquals(404, $array['code']);
    }
}

