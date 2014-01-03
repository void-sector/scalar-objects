<?php

namespace Scalar\Operation;

use Scalar\String;

/**
 * Description of ToLower
 */
class ToLower implements OperationInterface
{
    /**
     * Transforms the String to LowerCase
     * @param String $scalar
     * @return string
     */
    public function direct(String $scalar)
    {
        return strtolower($scalar->getValue());
    }
}
