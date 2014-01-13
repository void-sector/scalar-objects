<?php

namespace Scalar\Validator;

class String extends AbstractValidator implements ValidatorInterface
{
    /**
     * Constant ErrorMessage holds the error message
     */
    const ERROR_MESSAGE = 'Scalar\String expects a string as a parameter';

    
    /**
     * Validate the Param to be a valid type string
     * 
     * @param mixed $value
     * @return boolean
     */
    public function isValid($value)
    {
        return is_string($value);
    }
}
