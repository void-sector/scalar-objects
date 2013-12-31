<?php

namespace Scalar\Operation;

use Scalar\String;

/**
 * Description of ToUpper
 */
class ToUpper
{
    /**
     * Transforms the String to UpperCase
     * @param String $scalar
     * @return string
     */
    public function direct(String $scalar)
    {
        return strtoupper($scalar->getValue());
    }
}
