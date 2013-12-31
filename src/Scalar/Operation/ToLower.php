<?php

namespace Scalar\Operation;

use Scalar\String;


/**
 * Description of ToLower
 */
class ToLower
{
    /**
     * Transforms the String to LowerCase
     * @param String $scalar
     * @return string
     */
    public static function direct(String $scalar)
    {
        return strtolower($scalar->getValue());
    }
}
