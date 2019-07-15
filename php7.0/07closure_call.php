<?php

// novo formato para vincular um escopo de objeto para uma closure e invocá-la

class B {
    private $a = 22;
}


$closure = function() { return $this->a; };
echo $closure->call(new B);

echo '-';

// antes

$closure = function() { return $this->a; };
$obj = $closure->bindTo(new B, 'B');
echo $obj();