<?php

namespace Scalar\Operation;

use Scalar\String;

/**
 * Description of Length
 *
 * @author void-sector
 */
class Length
{
    /**
     * Performs a String Length on the String Object
     * @param String $scalar
     * @return int the length of the String
     */
    public static function direct(String $scalar)
    {
        return strlen($scalar->getValue());
    }
}
