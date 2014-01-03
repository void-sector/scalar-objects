<?php

namespace Scalar\Operation;

class OperationRegistry
{
    /**
     *
     * @var array
     */
    private static $operations;


    /**
     * Get an Operation from the Registry by name
     *
     * @param string $operation
     * @return \Scalar\Operation\Interface
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


    
    public static function set($name, OperationInterface $operation)
    {
        self::$operations[$name] = $operation;
    }
    
    
    /**
     * Loads a new Operation
     *
     * @param string $operation
     * @return \Scalar\Operation\OperationInterface
     */
    private static function load($operation)
    {
        $operationInstance = __NAMESPACE__ . '\\' . ucfirst($operation);

        return new $operationInstance;
    }
}
