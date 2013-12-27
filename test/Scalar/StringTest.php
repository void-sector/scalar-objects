<?php

use Scalar\String;

class StringTest extends PHPUnit_Framework_TestCase
{

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
    

    
    /**
     * @expectedException InvalidArgumentException
     */
    public function testNewStringWithNoneStringAsParameter()
    {
        new String(32);
    }
    
    
    /**
     * @expectedException InvalidArgumentException
     */
    public function testStringSetValueWithNoneStringAsParameter()
    {
        $string = new String('Foo');
        
        $string->setValue(32);
    }    

    
    public function testStringSetValueWithNoneSdtringAsParameter()
    {
        $string = new String('Foo');
        
        $string->toUpper();
    }    
}
