<?php

namespace Scalar\Operation;

/**
 * Description of ToUpper
 *
 * @author pascaln
 */
class ToLower
{
    public static function direct($value)
    {
        return strtolower($value);
    }
}
