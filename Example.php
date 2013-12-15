<?php

error_reporting(-1);
ini_set('display_errors', true);

require('./vendor/autoload.php');


use Scalar\String;

$string = new String('We love Foo');

// test for some methods on the string object
echo $string->replace('Foo', 'Bar')
            ->toUpper()
            ->getValue();


echo '<br /><br />';


// Test for the string->format()
$string = new String('We %s the %s!!!');

echo $string->format('rule', 'world');


// @note:
// 
// maybe do a 
//      String::format('we %s the %s!!!', 'fuck', 'duck');
// that returns a string object??

// or a string->bind();