<?php

namespace Scalar\Operation;

class OperationRegistry
{
    /**
     *
     * @var \Scalar\Operation\OperationRegistry
     */
    private static $instance;


    /**
     *
     * @var array
     */
    private $operations;


    /**
     * @access private
     */
    private function __construct()
    {
    }


    /**
     * Get Instance of the ObjectRegistry
     * @return \Scalar\Operation\OperationRegistry
     */
    public static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new self;
        }
        
        return self::$instance;
    }


    /**
     * Get an Operation from the Registry by name
     *
     * @param string $operation
     * @return \Scalar\Operation\Interface
     */
    public function get($operation)
    {
        if (!isset($this->operations[$operation])) {
            $this->operations[$operation] = $this->load($operation);
        }

        return $this->operations[$operation];
    }


    /**
     * Loads a new Operation
     *
     * @param string $operation
     * @return \Scalar\Operation\OperationInterface
     */
    private function load($operation)
    {
        $operationInstance = __NAMESPACE__ . '\\' . ucfirst($operation);

        return new $operationInstance;
    }

    
    
    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}
