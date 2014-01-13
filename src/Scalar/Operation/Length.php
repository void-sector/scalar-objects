<?php

namespace Scalar\Operation;

use Scalar\String;

/**
 * Description of Length
 */
class Length implements OperationInterface
{
    /**
     * Performs a String Length on the String Object
     * 
     * @param \Scalar\String $string
     * @return int the length of the String
     */
    public function direct(String $string)
    {
        return strlen($string->getValue());
    }
}
