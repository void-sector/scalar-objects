<?php

namespace Scalar;

use Scalar\Validator\Int as IntValidator;

class Int extends AbstractScalar
{
    final public function __construct($param)
    {
        parent::__construct(
            new IntValidator(),
            $param
        );
    }
}