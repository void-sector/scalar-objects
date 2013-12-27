<?php

namespace Scalar\Operation;

use Scalar\AbstractScalar;

/**
 * Description of Ceil
 *
 * @author void-sector
 */
class Ceil
{
    /**
     * Ceil a float
     * @param AbstractScalar eg 13.22222
     * @return float eg 14.0
     */
    public static function direct(AbstractScalar $scalar)
    {
        return ceil($scalar->getValue());
    }
}
