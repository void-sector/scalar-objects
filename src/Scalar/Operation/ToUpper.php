<?php

namespace Scalar\Operation;

/**
 * Description of ToUpper
 *
 * @author pascaln
 */
class ToUpper
{
    public static function direct($value)
    {
        return strtoupper($value);
    }
}
