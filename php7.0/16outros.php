<?php

// preg_replace_callback_array()

// CSPRNG Functions

// list() can always unpack objects implementing ArrayAccess

// Class member access on cloning has been added, e.g. (clone $foo)->bar().

class foo { static $bar = 'baz'; }

var_dump('foo'::$bar);

// resultado: baz