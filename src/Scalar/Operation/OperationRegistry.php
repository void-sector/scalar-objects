<?php

namespace Scalar\Operation;

class OperationRegistry
{
    /**
     * PlaceHolder for the Operations
     * @var array
     */
    private static $operations = array();


    /**
     * Get an Operation from the Registry by name
     *
     * @param string $operation
     * @return \Scalar\Operation\OperationInterface
     */
    public static function get($operation)
    {
        if (!isset(self::$operations[$operation])) {
            self::set(
                $operation,
                self::load($operation)
            );
        }

        return self::$operations[$operation];
    }


    /**
     * Set an Operation to the Registry
     * 
     * @param string $name
     * @param \Scalar\Operation\OperationInterface $operation
     */
    public static function set($name, OperationInterface $operation)
    {
        self::$operations[$name] = $operation;
    }
    
    
    /**
     * Loads a new Operation
     *
     * @access private
     * @param string $operation
     * @return \Scalar\Operation\OperationInterface
     */
    private static function load($operation)
    {
        $operationInstance = __NAMESPACE__ . '\\' . ucfirst($operation);

        return new $operationInstance;
    }
}
