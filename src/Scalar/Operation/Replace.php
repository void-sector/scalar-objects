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
     * Performs a StringReplace on the String Object
     * @param \Scalar\AbstractScalar $scalar
     * @param string $find
     * @param string $replace
     * @return string
     */
    public static function direct(AbstractScalar $scalar, $find, $replace)
    {
        return str_replace($find, $replace, $scalar->getValue());
    }
}
