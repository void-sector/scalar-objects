<?php

use Scalar\Operation\ToUpper;


class ToUpperTest extends PHPUnit_Framework_TestCase
{
    public function testToUpper()
    {
        $string = 'We Love Foo';
        
        $interface = $this->getMock('Scalar\Validator\ValidatorInterface');
        
        $mock = $this->getMockForAbstractClass('Scalar\AbstractScalar', array($interface, $string));
        
        $this->assertSame(
            ToUpper::direct($mock, $string),
            strtoupper($string)
        );
    }
}
