<?php

#declara��o de tipos escalares

// For�ando modo "strict" para par�metros e retornos de fun��es
declare(strict_types=1);

function somaDeInteiros(int $a, int $b) : int {

    return $a + $b;

}

echo somaDeInteiros(3.1,4);