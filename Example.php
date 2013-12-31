<?php

error_reporting(-1);
ini_set('display_errors', 1);

require_once 'vendor/autoload.php';

$string = new Scalar\String('We Love Foo');

$string->replace(
    array('Love', 'Foo'),
    array('Hate', 'Bar')
);
$string->replace(
    array('Hate', 'Bar'),
    array('Digg', 'Chicks')
);
$string->toUpper();
echo $string->getValue();


echo '<br><br>';

$float = new Scalar\Float(M_PI);

var_dump($float->ceil()->getValue());
