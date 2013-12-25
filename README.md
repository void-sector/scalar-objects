php-scalar-objects
==================

PHP Scalar Objects in PHP. Scalar values gets validated when initialized. Handy when used with Type Hinting.

[![Build Status](https://travis-ci.org/void-sector/php-scalar-objects.png?branch=master)](https://travis-ci.org/void-sector/php-scalar-objects)

# Example

    <?php

    error_reporting(-1);
    ini_set('display_errors', true);

    require('./vendor/autoload.php');


    use Scalar\String;

    $string = new String('We love Foo');

    $string->replace('Foo', 'Bar');
    $string->toUpper();

    echo $string . PHP_EOL;
