<?php
if (!function_exists('simple_serialize')) {
    function simple_serialize(array $array)
    {
        return (new \Swiftmade\SimpleSerialize\Serializer($array))->output();
    }
    function simple_unserialize($string)
    {
        return (new \Swiftmade\SimpleSerialize\Unserializer($string))->output();
    }
}
