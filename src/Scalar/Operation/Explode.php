<?php

namespace Scalar\Operation;

use Scalar\String;

/**
 * Description of Explode
 */
class Explode implements OperationInterface
{

    /**
     * Explode a string on a delimiter
     * 
     * @param \Scalar\String $string
     * @param type $delimiter
     * @param type $limit
     * @return type
     */
    public function direct(String $string, $delimiter, $limit=null)
    {
        if (null === $limit) {
            return  explode($delimiter, $string->getValue());
        }
        
        return explode($delimiter, $string->getValue(), $limit);
    }
}
