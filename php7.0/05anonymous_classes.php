<?php

// suporte adicionado através do formato "new class";

$objeto = new class {
    public function teste() {
        echo "Olá Mundo, sou um método de uma classe anônima chamada: " . __CLASS__;
    }
};

$objeto->teste();