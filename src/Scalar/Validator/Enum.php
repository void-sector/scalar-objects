<?php

namespace Scalar\Validator;

class Enum implements ValidatorInterface
{

    /**
     * Constant ErrorMessage holds the error message
     */
    const ERROR_MESSAGE = 'Scalar\Enum expects a float as a parameter';
    

    /**
     * Zoiets doen..
     *
     * @param type $param
     * @throws Exception
     */
    public function isValid($param)
    {
        $class = new ReflectionClass($this);

        $constants = $class->getConstants();

        if (!array_key_exists($param, $constants)) {
            throw new Exception('Undefined Constant ');
        }

        $this->property = $param;
    }
}