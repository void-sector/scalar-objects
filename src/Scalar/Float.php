<?php

namespace Scalar;

use Scalar\Validator\Float as FloatValidator;

class Float extends AbstractScalar
{
    /**
     * Float Constructor
     * 
     * @param type $value
     */
    final public function __construct($value)
    {
        parent::__construct(
            new FloatValidator(),
            $value
        );
    }
}
