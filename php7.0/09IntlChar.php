<?php

// extensão que proporciona constantes e métodos utilitários para lidar com caracteres UTF8

// PHP7 proporciona a classe IntlChar

if (!extension_loaded('intl')) {
    die("Extensão 'intl' necessária não carregada.");
}

echo IntlChar::charName('@');