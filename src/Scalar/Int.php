<?php

namespace Scalar;

use Scalar\Validator\Int as IntValidator;

class Int extends AbstractScalar
{
    /**
     * Int Constructor
     * 
     * @param type $value
     */
    final public function __construct($value)
    {
        parent::__construct(
            new IntValidator(),
            $value
        );
    }
}