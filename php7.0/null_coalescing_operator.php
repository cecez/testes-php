<?php

declare(strict_types=1);

#Null coalescing operator

// operador ternário + isset()

// antes

$variavel = isset($teste) ? $teste : 'teste';

echo $variavel;

// depois

$variavel2 = $variavel2 ?? 'teste';

echo $variavel2;
