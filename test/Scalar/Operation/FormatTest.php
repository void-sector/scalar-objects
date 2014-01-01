<?php

use Scalar\Operation\Format;


class FormatTest extends PHPUnit_Framework_TestCase
{
    public function testFormat()
    {
        $string = 'We %s the %s';
        
        $param1 = 'Rule';
        $param2 = 'World';
        
        $expect = 'We Rule the World';

        $format = new Format;

        $this->assertSame(
            $format->direct(
                $this->getMock('\Scalar\String', array('__construct'), array($string)),                
                $param1,
                $param2
            ),
            $expect
        );
    }
}
