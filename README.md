Scalar-objects
==================

Scalar Objects in PHP. Scalar values gets validated when initialized. Handy when used with Type Hinting.

[![Build Status](https://travis-ci.org/void-sector/ScalarObjects.png?branch=master)](https://travis-ci.org/void-sector/ScalarObjects)
[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/void-sector/ScalarObjects/badges/quality-score.png?s=50937d234c07bce292c265daee3acb250399f99d)](https://scrutinizer-ci.com/g/void-sector/ScalarObjects/)
[![Code Coverage](https://scrutinizer-ci.com/g/void-sector/ScalarObjects/badges/coverage.png?s=c4c78454335d1346711b5369d02bca07f8bad20c)](https://scrutinizer-ci.com/g/void-sector/ScalarObjects/)

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
