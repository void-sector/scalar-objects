<?php

namespace Scalar\Validator;

class Bool extends AbstractValidator implements ValidatorInterface
{
    /**
     * Constant ErrorMessage holds the error message
     */
    const ERROR_MESSAGE = 'Scalar\Boolean expects a boolean as a parameter';


    /**
     * IsValid checks if the parameter is a boolean
     * @param string $param
     * @return boolean
     */
    public function isValid($param)
    {
        return is_bool($param);
    }
}
