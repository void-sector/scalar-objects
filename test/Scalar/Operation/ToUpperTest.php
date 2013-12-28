<?php

use Scalar\Operation\ToUpper;

class ToUpperTest extends PHPUnit_Framework_TestCase
{
    public function testToUpper()
    {
        $string = 'We Love Foo';
        
        $this->assertSame(
            ToUpper::direct(
                $this->getMock('\Scalar\String', array('__construct'), array($string))
            ),
            strtoupper($string)
        );
    }
}
