<?php

namespace Scalar;

use Scalar\Validator\Bool as BoolValidator;

class Bool extends AbstractScalar
{
    /**
     * Bool constructor 
     * 
     * @param type $value
     */
    final public function __construct($value)
    {
        parent::__construct(
            new BoolValidator(),
            $value
        );
    }
}
