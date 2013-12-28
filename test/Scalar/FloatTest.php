<?php

use Scalar\Float;

class FloatTest extends PHPUnit_Framework_TestCase
{

    public function testFloatGetValue()
    {
        $float = new Float(M_PI);

        $this->assertSame(M_PI, $float->getValue());
    }
    
    
    public function testFloatSetNewValue()
    {
        $float = new Float(M_PI);
        
        $float->setValue(M_PI_2);
        
        $this->assertSame(M_PI_2, $float->getValue());
    }    
    
    
    /**
     * @expectedException InvalidArgumentException
     */
    public function testNewFloatWithNoneInterger()
    {
        new Float('Foo');
    }
    

    

    /**
     * @expectedException InvalidArgumentException
     */
    public function testFloatSetValueAsStringArgument()
    {
        $float = new Float(M_PI);
        
        $float->setValue('Foo');
    }
}
