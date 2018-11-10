<?php
namespace Swiftmade\SimpleSerialize;

final class Unserializer
{
    private $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function output()
    {
        $output = [];

        if ($this->string[strlen($this->string) - 1] !== ';') {
            $this->string .= ';';
        }

        preg_match_all('/(.*?):(.*?)[;|^]/u', $this->string, $matches);

        foreach ($matches[1] as $index => $key) {
            $output[$key] = $matches[2][$index];
        }

        return $output;
    }
}
