<?php

namespace Scalar\Operation;

use Scalar\AbstractScalar;

/**
 * Description of ToUpper
 *
 * @author void-sector
 */
class Replace
{
    /**
     * 
     * @param string $find
     * @param string $replace
     * @param \Scalar\AbstractScalar $scalar
     * @return string
     */
    public static function direct($find, $replace, AbstractScalar $scalar)
    {
        return str_replace($find, $replace, $scalar->getValue());
    }
}
