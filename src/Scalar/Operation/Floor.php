<?php

namespace Scalar\Operation;

use Scalar\Float;

/**
 * Description of Floor
 */
class Floor implements OperationInterface
{
    /**
     * Floor a float
     * 
     * @param \Scalar\Float $float eg 13.22222
     * @return float eg 13.0
     */
    public function direct(Float $float)
    {
        return floor($float->getValue());
    }
}
