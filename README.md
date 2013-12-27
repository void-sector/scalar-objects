# Scalar-objects

Support for method calls on primitive types in PHP. Values are validated when constructed using there own validators. Handy when used with Type Hinting in your OO project.

[![Build Status](https://travis-ci.org/void-sector/ScalarObjects.png?branch=master)](https://travis-ci.org/void-sector/ScalarObjects)
[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/void-sector/ScalarObjects/badges/quality-score.png?s=50937d234c07bce292c265daee3acb250399f99d)](https://scrutinizer-ci.com/g/void-sector/ScalarObjects/)
[![Code Coverage](https://scrutinizer-ci.com/g/void-sector/ScalarObjects/badges/coverage.png?s=c4c78454335d1346711b5369d02bca07f8bad20c)](https://scrutinizer-ci.com/g/void-sector/ScalarObjects/)


## Example

    <?php

    require('./vendor/autoload.php');

    use Scalar\String;

    $string = new String('We love Fruit!');

    $string->replace('Fruit', 'Coding');
    $string->toUpper();

    echo $string . PHP_EOL; // results in: WE LOVE CODING!

### Contribute

This is work in progress
I'm still trying to find a nice way to delegate the method calls following the [Open/Closed Principle](http://en.wikipedia.org/wiki/Open/closed_principle).

If you got any idea's, please fork the project and make a pull request. 
