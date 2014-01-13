<?php

namespace Scalar\Validator;

class Float extends AbstractValidator implements ValidatorInterface
{
    /**
     * Constant ERROR_MESSAGE holds the error string
     */
    const ERROR_MESSAGE = 'Scalar\Float expects a float as a parameter';


    /**
     * Validate the Param to be a valid type float
     * 
     * @param mixed $value
     * @return boolean
     */
    public function isValid($value)
    {
        return is_float($value);
    }
}
