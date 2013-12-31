<?php

namespace Scalar\Operation;

use Scalar\Float;

/**
 * Description of Ceil
 */
class Ceil
{
    /**
     * Ceil a float
     * @param \Scalar\Float eg 13.22222
     * @return float eg 14.0
     */
    public static function direct(Float $scalar)
    {
        return ceil($scalar->getValue());
    }
}
