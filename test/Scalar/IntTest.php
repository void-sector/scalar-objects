<?php

use Scalar\Int;

class IntTest extends PHPUnit_Framework_TestCase
{

    public function testIntegerGetValue()
    {
        $integer = new Int(12);

        $this->assertSame(12, $integer->getValue());
    }
    
    
    public function testIntegerSetNewValue()
    {
        $integer = new Int(12);
        
        $integer->setValue(33);
        
        $this->assertSame(33, $integer->getValue());
    }    
    
    
    /**
     * @expectedException InvalidArgumentException
     */
    public function testNewIntegerWithNoneInterger()
    {
        new Int(true);
    }
    

    /**
     * @expectedException InvalidArgumentException
     */
    public function testIntegerSetValueAsStringArgument()
    {
        $integer = new Int(12);
        
        $integer->setValue('Foo');
    }
}
