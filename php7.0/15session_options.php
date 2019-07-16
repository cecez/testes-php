<?php

// session_start() now accepts an array of options that
// override the session configuration directives normally set in php.ini.

session_start([
    'read_and_close' => true,
]);