<?php

use Scalar\Operation\ToLower;


class ToLowerTest extends PHPUnit_Framework_TestCase
{
    public function testToLower()
    {
        $string = 'We Love Foo';
        
        $interface = $this->getMock('Scalar\Validator\ValidatorInterface');
        
        $mock = $this->getMockForAbstractClass('Scalar\AbstractScalar', array($interface, $string));
        
        $this->assertSame(
            ToLower::direct($mock, $string),
            strtolower($string)
        );
    }
}
