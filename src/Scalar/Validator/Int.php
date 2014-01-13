<?php

namespace Scalar\Validator;

class Int extends AbstractValidator implements ValidatorInterface
{
    /**
     * Constant ErrorMessage holds the error message
     */
    const ERROR_MESSAGE = 'Scalar\Integer expects an integer as a parameter';


    /**
     * Validate the Param to be a valid type string
     * 
     * @param mixed $value
     * @return boolean
     */
    public function isValid($value)
    {
        return is_int($value);
    }
}
