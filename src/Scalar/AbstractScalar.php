<?php

namespace Scalar;

use InvalidArgumentException;
use Scalar\Operation\OperationRegistry;
use Scalar\Validator\ValidatorInterface;

abstract class AbstractScalar
{
    /**
     * Placeholder for the Value
     *
     * @var mixed
     * @access private
     */
    private $value;


    /**
     * Placeholder for the Validator
     *
     * @var ValidatorInterface
     * @access private
     */
    private $validator;


    /**
     * Constructor
     *
     * @param ValidatorInterface $validator
     * @param mixed $param
     */
    public function __construct(ValidatorInterface $validator, $param)
    {
        $this->validator = $validator;
        $this->setValue($param);
    }
    

    /**
     * Sets a value to the Object
     *
     * @param mixed $param
     * @access private
     * @return AbstractScalar
     * @throws InvalidArgumentException if trying to set a primitive string to a Scalar/Int
     */
    public function setValue($param)
    {
        if (false === $this->validator->isValid($param)) {

            $class = get_class($this->validator);

            throw new InvalidArgumentException(
                $class::ERROR_MESSAGE
            );
        }

        $this->value = $param;
        
        return $this;
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
     * Calls Methods on the Object
     *
     * @param string $method
     * @param array $params
     * @return mixed [AbstractScalar if type is the same after the operation|mixed value if type changes]
     */
    public function __call($method, array $params)
    {
        array_unshift($params, $this);
        
        $operation = OperationRegistry::getInstance()->get($method);
        
        $result = call_user_func_array(
            array($operation, 'direct'),
            $params
        );
        
        if ($this->validator->isValid($result)) {
            return $this->setValue($result);
        }

        return $result;
    }
    
    
    /**
     * Returns the value of the objects as a string
     * 
     * @deprecated since version 1.0
     * @return string The String value of the Scalar Object
     */
    public function __toString()
    {
        return (string) $this->getValue();
    }
}
