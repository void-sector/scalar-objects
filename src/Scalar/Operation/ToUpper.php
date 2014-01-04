<?php

namespace Scalar\Operation;

use Scalar\String;

/**
 * Description of ToUpper
 */
class ToUpper implements OperationInterface
{
    /**
     * Transforms the String to UpperCase
     * 
     * @param \Scalar\String $scalar
     * @return string
     */
    public function direct(String $scalar)
    {
        return strtoupper($scalar->getValue());
    }
}
