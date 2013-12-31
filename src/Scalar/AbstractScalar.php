<?php

namespace Scalar;

use InvalidArgumentException;
use Scalar\Validator\ValidatorInterface;

abstract class AbstractScalar
{
    /**
     * Placeholder for the Value
     * @var mixed
     * @access private
     */
    private $value;


    /**
     * Placeholder for the Validator
     * @var ValidatorInterface
     * @access private
     */
    private $validator;


    /**
     * Constructor
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
     * @param mixed $param
     * @access private
     * @throws InvalidArgumentException if trying to set a primitive string to a Scalar/Int
     * @return AbstractScalar
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
     * @access public
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    
    /**
     * Calls Methods on the Object
     * @param string $method
     * @param array $params
     * @return mixed [AbstractScalar if type is the same after the operation|mixed value if type changes]
     * @note Need to refactor this, still looking for a way to make this pretty
     */
    public function __call($method, array $params)
    {
        array_unshift($params, $this);
        
        $class = __NAMESPACE__ . '\\Operation\\' . ucfirst($method);
        
        $result = call_user_func_array(
            array($class, 'direct'),
            $params
        );
        
        if (false === $this->validator->isValid($result)) {
            return $result;
        }
        
        $this->setValue($result);

        return $this;
    }
    
    
    /**
     * Returns the value of the objects as a string
     * @return string
     */
    public function __toString()
    {
        return (string) $this->getValue();
    }
}
