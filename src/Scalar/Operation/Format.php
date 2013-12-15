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

        $scalar = array_pop($args);
        
        array_unshift($args, $scalar->getValue());
        
        
        return call_user_func_array(
            'sprintf', $args
        );
    }
}
