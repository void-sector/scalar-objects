<?php

namespace Scalar\Operation;

use Scalar\String;

/**
 * Description of ToUpper
 */
class Replace implements OperationInterface
{
    /**
     * Performs a StringReplace on the String Object
     * 
     * @param \Scalar\String $string
     * @param string $find
     * @param string $replace
     * @return string
     */
    public function direct(String $string, $find, $replace)
    {
        return str_replace($find, $replace, $string->getValue());
    }
}
