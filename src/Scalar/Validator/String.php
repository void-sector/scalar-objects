<?php

namespace Scalar\Validator;

class String implements ValidatorInterface
{
    /**
     * Constant ErrorMessage holds the error message
     */
    const ERROR_MESSAGE = 'Scalar\String expects a string as a parameter';

    
    /**
     * Validate the Param to be a valid type string
     * @param mixed $param
     * @return boolean
     */
    public function isValid($param)
    {
        return is_string($param);
    }
}
