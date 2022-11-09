<?php

// Boleanos
var_dump(true);
var_dump(false);

// Inteiros
var_dump(1997);

// Numeros Flutuantes
$a = 1.234;
var_dump($a);

// Strings
var_dump('Hello dev 😃');

// Arrays
$array1 = [
    "name" => "joaovitorcfdev",
    "tech" => "PHP",
];

$array2 = [
    "joaovitorcfdev",
    "PHP",
];

var_dump($array1);
var_dump($array2);

// Array associativo
echo $array1['name'] . "\n";
echo $array2[1];