<?php

ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
error_reporting(E_ALL );

// PHP 4 style constructors
//PHP 7 will emit E_DEPRECATED if a PHP 4 constructor is the only constructor defined within a class

class ffff {
    function ffff() {
        echo 'chamando construtor das antiga';
    }
}

$obj = new ffff();

// resultado: deveria exibir uma mensagem deprecated