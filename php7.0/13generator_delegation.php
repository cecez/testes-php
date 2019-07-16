<?php

// generators, através do yield from, podem delegar para outro generator, objeto Traversable ou array

function gen()
{
    yield 1;
    yield 2;
    yield from gen2();
    yield from [5,6];
}

function gen2()
{
    yield 3;
    yield 4;
}

foreach (gen() as $val)
{
    echo $val, PHP_EOL;
}

// resultado

// 1 2 3 4 5 6