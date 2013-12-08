<?php

namespace Scalar;

use Scalar\Validator\Integer as IntegerValidator;

class Integer extends AbstractScalar
{
    final public function __construct($param)
    {
        parent::__construct(
            new IntegerValidator(),
            $param
        );
    }
}