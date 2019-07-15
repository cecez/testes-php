<?php

#declaração de tipos escalares

// Forçando modo "strict" para parâmetros e retornos de funções
declare(strict_types=1);

function somaDeInteiros(int $a, int $b) : int {

    return $a + $b;

}

echo somaDeInteiros(3.1,4);