<?php

namespace Scalar;

use InvalidArgumentException;
use Scalar\Validator\ValidatorInterface;


abstract class AbstractScalar
{
    /**
     * Placeholder for the Value
     * @var mixed
     */
    private $value;


    /**
     * Placeholder for the Validator
     * @var ValidatorInterface
     */
    private $validator;


    /**
     * Constructor
     * @param ValidatorInterface $validator
     * @param mixed $param
     */
    public function __construct(ValidatorInterface $validator, $param)
    {
        $this->setValidator($validator);
        $this->setValue($param);
    }
    
    
    /**
     * Set Validator
     * @access private
     * @param ValidatorInterface $validator
     */
    private function setValidator(ValidatorInterface $validator)
    {
        $this->validator = $validator;
    }
    
    
    /**
     * Get Validator
     * @access private
     * @return ValidatorInterface
     */
    private function getValidator()
    {
        return $this->validator;
    }


    /**
     * Set value and validates the value
     * @param mixed $param
     * @access private
     * @return null
     */
    public function setValue($param)
    {
        if (false === $this->getValidator()->isValid($param)) {

            $class = get_class($this->validator);

            throw new InvalidArgumentException(
                $class::ERROR_MESSAGE
            );
        }

        $this->value = $param;
    }


    /**
     * Get's the value
     *
     * @access public
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
    
    
    /**
     * Maby only for Strings?
     * @return type
     */
    public function __toString()
    {
        return (string) $this->getValue();
    }
    
    
    /**
     * Bad Practice to use this (it works though)
     * 
     * Maby as a trait on a string??
     * 
     * @param type $method
     * @param type $params
     * @throws \BadFunctionCallException
     */
    public function __call($method, $params)
    {
        if (!function_exists($method)) {
            throw new \Exception('Fatal Error: call to undefined method/function ' . $method);
        }
        
        array_push($params, $this->getValue());
        
        $this->setValue(
            call_user_func_array($method, $params)
        );
    }
}