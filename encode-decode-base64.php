<?php

/**
 * $val  = value untuk di decode atau encode
 * $length = digunakan untuk melakukan looping (encode dan decode nilai lengthnya harus sama)
 * Examp : 
 *       -> encode('test', 5) -> value (test) akan di encode sebanyak (5) kali 
 *       -> decode('VmpKMFYyRXhXWGxXYmxKV1lUQndVbFpyVWtKUFVUMDk', 5) -> value  akan di decode sebanyak (5) kali 
 * 
 */

function encode($val, $length)
{
    $encode = base64_encode($val);
    for ($i = 1; $i <= intval($length); $i++) {
        $encode = base64_encode($encode);
    }
    return $encode;
}

function decode($val, $length)
{
    $decode = base64_decode($val);
    for ($i = 1; $i <= intval($length); $i++) {
        $decode = base64_decode($decode);
    }
    return $decode;
}

echo encode('Mang Chung', 5);
echo "<br>";
echo decode('Vm0xMFlXRXhTWGxWYkdScVVrWmFVMWxVUmt0aU1WVjNWMjFHVGxadFVqRlhXSEJ6VlZaV1ZVMUVhejA9', 5);
