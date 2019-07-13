<?php

// agora é possível filtrar por classes ao utilizar unserialize()

class A { private $a = 1; };

$objA = new A();

$serializado = serialize(
    ['A' => $objA,
    'B' => new stdClass()]
);

// padrão, permite tudo
$desserializado = unserialize($serializado);

var_dump($desserializado);

echo "<p>";

// gera classes incompletas, exceto para as permitidas
$desserializado2 = unserialize($serializado, ["allowed_classes" => ["stdClass"]]);

var_dump($desserializado2);