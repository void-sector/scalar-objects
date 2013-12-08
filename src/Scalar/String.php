<?php

namespace Scalar;

use Scalar\Validator\String as StringValidator;

class String extends AbstractScalar
{
    final public function __construct($param)
    {
        parent::__construct(
            new StringValidator(),
            $param
        );
    }
}