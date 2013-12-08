<?php

namespace Scalar\Validator;

class Float implements ValidatorInterface
{
    
    /**
     * Constant ERROR_MESSAGE holds the error string
     */
    const ERROR_MESSAGE = 'Scalar\Float expects a float as a parameter';


    /**
     * Validate the Param to be a valid type float
     * @param mixed $param
     * @return boolean
     */
    public function isValid($param)
    {
        return is_float($param);
    }
}