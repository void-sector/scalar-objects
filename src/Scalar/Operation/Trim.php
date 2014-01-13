<?php

namespace Scalar\Operation;

use Scalar\String;

/**
 * Description of Trim
 */
class Trim implements OperationInterface
{
    /**
     * Trims a String from 
     * 
     * @param \Scalar\String $string
     * @param string $charlist defaults to " \t\n\r\0\x0B"
     * @link http://www.php.net/manual/en/function.trim.php
     * @return string
     */
    public function direct(String $string, $charlist = " \t\n\r\0\x0B")
    {
        return trim($string->getValue(), $charlist);
    }
}