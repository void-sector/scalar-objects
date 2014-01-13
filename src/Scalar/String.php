<?php

namespace Scalar;

use Scalar\Validator\String as StringValidator;

class String extends AbstractScalar
{
    /**
     * String Constructor
     * 
     * @param type $value
     */
    final public function __construct($value)
    {
        parent::__construct(
            new StringValidator(),
            $value
        );
    }
}
