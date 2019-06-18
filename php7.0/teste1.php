<?php

#declaraчуo de tipos escalares

// Forчando modo "strict" para parтmetros e retornos de funчѕes
declare(strict_types=1);

function somaDeInteiros(int $a, int $b) : int {

    return $a + $b;

}

echo somaDeInteiros(3.1,4);