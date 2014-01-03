<?php

namespace Scalar\Operation;

/**
 * Description of Format
 */
class Format implements OperationInterface
{
    /**
     * Formats a string
     * 
     * @return string
     */
    public function direct()
    {
        $args = func_get_args();
        $args[0] = $args[0]->getValue();
        
        return call_user_func_array(
            'sprintf', $args
        );
    }
}
