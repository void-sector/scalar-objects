<?php

namespace Scalar\Validator;

abstract class AbstractValidator
{
    /**
     * Get the error message defined in the validator
     *
     * @return string
     */
    public function getErrorMessage()
    {
        return static::ERROR_MESSAGE;
    }
}
