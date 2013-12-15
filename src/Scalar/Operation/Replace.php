<?php

namespace Scalar\Operation;

use Scalar\AbstractScalar;

/**
 * Description of ToUpper
 *
 * @author pascaln
 */
class Replace
{
    public static function direct($find, $replace, AbstractScalar $scalar)
    {
        $scalar->setValue(
            str_replace(
                $find,
                $replace,
                $scalar->getValue()
            )
        );
        
        return $scalar;
    }
}
