Scalar-objects
==================

Scalar Objects in PHP. Scalar values gets validated when initialized. Handy when used with Type Hinting.

[![Build Status](https://travis-ci.org/void-sector/ScalarObjects.png?branch=master)](https://travis-ci.org/void-sector/ScalarObjects)
[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/void-sector/ScalarObjects/badges/quality-score.png?s=03a5c3db1004cccb4a6bcd9aeb91db8e56a01a43)](https://scrutinizer-ci.com/g/void-sector/ScalarObjects/)
[![Code Coverage](https://scrutinizer-ci.com/g/void-sector/ScalarObjects/badges/coverage.png?s=b527f7d7564220fea80be65f2475fe5b0c4a18dd)](https://scrutinizer-ci.com/g/void-sector/ScalarObjects/)

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
