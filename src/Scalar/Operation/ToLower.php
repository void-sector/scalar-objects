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
     * 
     * @param \Scalar\String $string
     * @return string
     */
    public function direct(String $string)
    {
        return strtolower($string->getValue());
    }
}
