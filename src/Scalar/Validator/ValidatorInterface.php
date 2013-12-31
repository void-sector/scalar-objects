<?php

namespace Scalar\Validator;

interface ValidatorInterface
{
    /**
     * force a public function isValid()
     */
    public function isValid($param);
}
