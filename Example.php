<?php

error_reporting(-1);
ini_set('display_errors', true);

require('./vendor/autoload.php');


use Scalar\String;

$string = new String('We love Foo');

echo $string->replace('Foo', 'Bar')
            ->toUpper();