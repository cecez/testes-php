<?php

// assert() is now a language construct and not a function.
// assertion can now be an expression.
// The second parameter is now interpreted either as an exception (if a Throwable object is given),
// or as the description supported from PHP 5.4.8 onwards.

ini_set('assert.exception', 1);

class ErroCustomizado extends AssertionError {}

assert(false, new ErroCustomizado('Alguma mensagem de erro. '));
//assert(false, 'Mensagem de erro');