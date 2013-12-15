<?php

namespace Scalar\Operation;

/**
 * Description of ToUpper
 *
 * @author pascaln
 */
class ToUpper
{
    public static function direct(\Scalar\AbstractScalar $scalar)
    {
        $scalar->setValue(
            strtoupper($scalar->getValue())
        );
        return $scalar;
    }
}
