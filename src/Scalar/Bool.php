<?php

namespace Scalar;

use Scalar\Validator\Bool as BoolValidator;

class Bool extends AbstractScalar
{
    final public function __construct($param)
    {
        parent::__construct(
            new BoolValidator(),
            $param
        );
    }
}
