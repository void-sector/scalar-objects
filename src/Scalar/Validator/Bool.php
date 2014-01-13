<?php

namespace Scalar\Validator;

class Bool extends AbstractValidator implements ValidatorInterface
{
    /**
     * Constant ErrorMessage holds the error message
     */
    const ERROR_MESSAGE = 'Scalar\Boolean expects a boolean as a parameter';


    /**
     * Validate the Param to be a valid type boolean
     * 
     * @param mixed $value
     * @return boolean
     */
    public function isValid($value)
    {
        return is_bool($value);
    }
}
