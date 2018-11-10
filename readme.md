｛ Simple Serialization
========================

This is a PHP package that serves a very simple purpose: Serialize associative string arrays.

# Why?
We are using this package to turn some data into SMS messages and then convert SMS messages back to PHP arrays.
You can use it for any purpose you like, when `json_encode` or `serialize` is overkill.

# Features

* Simple API: `simple_serialize($array)` and `simple_unserialize($string)`
* Your keys or values _can contain_ quotes, whitespaces, etc. No escaping needed.
* The only limitation is, your keys cannot contain **colon (:)** and your values cannot contain **semi-colon (;)**
* Tolerates syntax errors! It will still extract the valid bits of data.

# Usage

Installation:

    composer require swiftmade/simple-serialization

Serialize:

    $array = ['your_key' => 'whatever information'];
    $string = simple_serialize($array); // "your_key:whatever information"

Unserialize:

    $string = "your_key:whatever information";
    $array = simple_unserialize($string); // ['your_key' => 'whatever information'];