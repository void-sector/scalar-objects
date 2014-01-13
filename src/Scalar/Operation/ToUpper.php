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
     * @param \Scalar\String $string
     * @return string
     */
    public function direct(String $string)
    {
        return strtoupper($string->getValue());
    }
}
