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
        
        $interface = $this->getMock('Scalar\Validator\ValidatorInterface');
        
        $mock = $this->getMockForAbstractClass('Scalar\AbstractScalar', array($interface, $string));
        
        $this->assertSame(
            Format::direct($mock, $param1, $param2),
            $expect
        );
    }
}
