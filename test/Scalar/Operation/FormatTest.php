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
        
        $this->assertSame(
            Format::direct(
                $this->getMock('\Scalar\String', array('__construct'), array($string)),                
                $param1,
                $param2
            ),
            $expect
        );
    }
}
