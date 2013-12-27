<?php

use Scalar\Operation\Replace;


class ReplaceTest extends PHPUnit_Framework_TestCase
{
    public function testReplace()
    {
        $string = 'We Love Foo';
        
        $find = 'Foo';
        $replace = 'Bar';
        
        $expect = 'We Love Bar';
        
        $interface = $this->getMock('Scalar\Validator\ValidatorInterface');
        
        $mock = $this->getMockForAbstractClass('Scalar\AbstractScalar', array($interface, $string));
        
        $this->assertSame(
            Replace::direct($mock, $find, $replace),
            $expect
        );
    }
}
