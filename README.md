# Scalar-objects #

[![Build Status](https://travis-ci.org/void-sector/scalar-objects.png?branch=master)](https://travis-ci.org/void-sector/scalar-objects)
[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/void-sector/scalar-objects/badges/quality-score.png?s=ea73f05a66608d98ea953c10d896da80b2b77aa2)](https://scrutinizer-ci.com/g/void-sector/scalar-objects/)
[![Code Coverage](https://scrutinizer-ci.com/g/void-sector/scalar-objects/badges/coverage.png?s=8c73f8bc619e734abb4bc56610a7726117f6d216)](https://scrutinizer-ci.com/g/void-sector/scalar-objects/)

Supports method calls on primitive types in PHP. Allows you to use [Type Hinting](http://www.php.net/manual/en/language.oop5.typehinting.php) on the primitives in your OO project. Values are validated when constructed using there own validators.

This project is work in progress.
I'm still trying to find a nice way to delegate the method calls following the [Open/Closed Principle](http://en.wikipedia.org/wiki/Open/closed_principle). The project is [PSR-1](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md), [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) compatable.


## Example ##

    <?php

    require('./vendor/autoload.php');

    use Scalar\String;

    $string = new String('We love Fruit!');

    $string->replace('Fruit', 'Coding');
    $string->toUpper();

    echo $string . PHP_EOL; // results in: WE LOVE CODING!

### Contribute ###

If you got suggestions, idea's or improvements , please fork the project and initialize a pull request.

Happy Coding!
