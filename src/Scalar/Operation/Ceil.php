<?php

namespace Scalar\Operation;

use Scalar\Float;

/**
 * Description of Ceil
 */
class Ceil implements OperationInterface
{
    /**
     * Ceil a float
     * 
     * @param \Scalar\Float $float eg 13.22222
     * @return float eg 14.0
     */
    public function direct(Float $float)
    {
        return ceil($float->getValue());
    }
}
