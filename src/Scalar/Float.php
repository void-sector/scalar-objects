<?php

namespace Scalar;

use Scalar\Validator\Float as FloatValidator;

class Float extends AbstractScalar
{
    final public function __construct($param)
    {
        parent::__construct(
            new FloatValidator(),
            $param
        );
    }
}
