<?php

namespace Scalar\Operation;

/**
 * Description of ToUpper
 *
 * @author pascaln
 */
class ToUpper
{
    public function direct($value)
    {
        return strtoupper($value);
    }
}
