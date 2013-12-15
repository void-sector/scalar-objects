<?php

namespace Scalar\Operation;

/**
 * Description of ToUpper
 *
 * @author pascaln
 */
class Replace
{
    public static function direct($find, $replace, $value)
    {
        return str_replace($find, $replace, $value);
    }
}
