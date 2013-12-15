<?php

namespace Scalar\Operation;

use Scalar\AbstractScalar;

/**
 * Description of ToLower
 *
 * @author void-sector
 */
class ToLower
{
    /**
     * Transforms the String to LowerCase
     * @param \Scalar\AbstractScalar $scalar
     * @return string
     */
    public static function direct(AbstractScalar $scalar)
    {
        return strtolower($scalar->getValue());
    }
}
