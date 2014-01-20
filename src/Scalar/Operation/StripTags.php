<?php

namespace Scalar\Operation;

use Scalar\String;

/**
 * Description of StripTags
 */
class StripTags implements OperationInterface
{

    /**
     * Strip HTML tags from a string
     * 
     * @param \Scalar\String $string
     * @param string $allowedTags
     * @return string
     */
    public function direct(String $string, $allowedTags=null)
    {
        return strip_tags($string->getValue(), $allowedTags);
    }
}
