<?php

// inclusão do return nos generators para retornar uma expressão final

$gen = (function() {
    yield 1;
    yield 2;
    yield 5;

    return 3;
})();

foreach ($gen as $val) {
    echo $val, PHP_EOL;
}

echo $gen->getReturn(), PHP_EOL;