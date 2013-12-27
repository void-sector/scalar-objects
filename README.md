Scalar-objects
==================

Support for method calls on primitive types in PHP. Values gets validated when initialized. Handy when used with Type Hinting.

[![Build Status](https://travis-ci.org/void-sector/ScalarObjects.png?branch=master)](https://travis-ci.org/void-sector/ScalarObjects)
[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/void-sector/ScalarObjects/badges/quality-score.png?s=50937d234c07bce292c265daee3acb250399f99d)](https://scrutinizer-ci.com/g/void-sector/ScalarObjects/)
[![Code Coverage](https://scrutinizer-ci.com/g/void-sector/ScalarObjects/badges/coverage.png?s=c4c78454335d1346711b5369d02bca07f8bad20c)](https://scrutinizer-ci.com/g/void-sector/ScalarObjects/)


This is work in progress, still trying to find a nice way to delegate the method calls (Operations) following the Open/Closed Principle.

If you got any idea's, please fork the project and make a pull request. 

# Example

    <?php

    require('./vendor/autoload.php');

    use Scalar\String;

    $string = new String('We love Fruit!');

    $string->replace('Fruit', 'Coding');
    $string->toUpper();

    echo $string . PHP_EOL; // results in: WE LOVE CODING!
