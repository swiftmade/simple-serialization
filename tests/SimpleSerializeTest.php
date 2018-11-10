<?php

use PHPUnit\Framework\TestCase;

class SimpleSerializeTest extends TestCase
{
    /**
     * @test
     */
    public function it_serializes_associative_array_into_string()
    {
        $array = [
            'banana' => 'yellow',
            'apple' => 'red',
            'orange' => 'orange',
            'pineapple' => 'yellow',
            'plum' => 'purple',
        ];

        $this->assertEquals(
            'banana:yellow;apple:red;orange:orange;pineapple:yellow;plum:purple',
            simple_serialize($array)
        );
    }

    /**
     * @test
     */
    public function it_unserializes_strings_into_associative_array()
    {
        $string = 'banana:yellow;apple:red;orange:orange;pineapple:yellow;plum:purple';

        $this->assertEquals(
            [
                'banana' => 'yellow',
                'apple' => 'red',
                'orange' => 'orange',
                'pineapple' => 'yellow',
                'plum' => 'purple',
            ],
            simple_unserialize($string)
        );
    }

    /**
     * @test
     */
    public function it_doesnt_break_when_key_or_value_contains_colon()
    {
        $string = 'time:12:23;foo:value:bar';

        $this->assertEquals(
            [
                'time' => '12:23',
                'foo' => 'value:bar',
            ],
            simple_unserialize($string)
        );
    }
}
