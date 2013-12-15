<?php

namespace Scalar\Operation;

use Scalar\AbstractScalar;

/**
 * Description of ToUpper
 *
 * @author void-sector
 */
class ToUpper
{
    /**
     * Transforms the String to UpperCase
     * @param \Scalar\AbstractScalar $scalar
     * @return string
     */
    public static function direct(AbstractScalar $scalar)
    {
        return strtoupper($scalar->getValue());
    }
}
