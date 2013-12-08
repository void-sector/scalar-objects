<?php

namespace Scalar;

use Scalar\Validator\Boolean as BooleanValidator;

class Boolean extends AbstractScalar
{
    final public function __construct($param)
    {
        parent::__construct(
            new BooleanValidator(),
            $param
        );
    }
}