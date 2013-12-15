<?php

namespace Scalar\Operation;

/**
 * Description of Format
 *
 * @author void-sector
 */
class Format
{
    /**
     * Formats a string
     * @return string
     */
    public static function direct()
    {
        $args = func_get_args();
        $args[0] = $args[0]->getValue();
        
        return call_user_func_array(
            'sprintf', $args
        );
    }
}
