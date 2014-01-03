<?php

namespace Scalar\Validator;

/**
 * Interface for the Validators
 * The validators need to have a isValid method
 */
interface ValidatorInterface
{
    /**
     * Validates the $value to be a valid primitive type
     */
    public function isValid($param);
}
