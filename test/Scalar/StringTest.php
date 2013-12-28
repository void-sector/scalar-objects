<?php

use Scalar\String;

class StringTest extends PHPUnit_Framework_TestCase
{

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Scalar\String expects a string as a parameter
     */
    public function testStringWithInvalidParameter()
    {
        new String(32);
    }
    
    
    public function testString()
    {
        new String('Foo');
    }    
    
    
    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Scalar\String expects a string as a parameter
     */
    public function testStringSetInvalidParameter()
    {
        $string = new String('Foo');
        
        $string->setValue(32);
    }    
    
    
    public function testStringGetValue()
    {
        $string = new String("Foo");

        $this->assertSame("Foo", $string->getValue());
    }
    
    
    public function testStringSetNewValue()
    {
        $string = new String('Foo');
        
        $string->setValue('Bar');
        
        $this->assertSame('Bar', $string->getValue());
    }

    
    public function testStringCastObjectToString()
    {
        $string = new String("Foo");

        $this->assertSame("Foo", (string) $string);
    }
}
