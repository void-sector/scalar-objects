<?php

namespace Scalar\Operation;

use Scalar\String;

/**
 * Description of ToUpper
 *
 * @author void-sector
 */
class ToUpper
{
    /**
     * Transforms the String to UpperCase
     * @param String $scalar
     * @return string
     */
    public static function direct(String $scalar)
    {
        return strtoupper($scalar->getValue());
    }
}
