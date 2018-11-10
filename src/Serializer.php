<?php
namespace Swiftmade\SimpleSerialize;

final class Serializer
{
    private $array;

    public function __construct(array $array)
    {
        $this->array = $array;
    }

    public function output()
    {
        $keyValues = [];

        foreach ($this->array as $key => $value) {
            if (strpos($key, ':') !== false) {
                throw new SerializerException('Invalid colon (:) at key: ' . $key);
            }
            $keyValues[] = $key . ':' . $value;
        }

        return implode(';', $keyValues);
    }
}
