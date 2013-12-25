<?php

use Scalar\Float;

class FloatTest extends PHPUnit_Framework_TestCase
{

    public function testFloatGetValue()
    {
        $float = new Float(3.14159265359);

        $this->assertSame(3.14159265359, $float->getValue());
    }
    
    
    public function testFloatSetNewValue()
    {
        $float = new Float(3.14159265359);
        
        $float->setValue(2.16);
        
        $this->assertSame(2.16, $float->getValue());
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
        $float = new Float(3.14159265359);
        
        $float->setValue('Foo');
    }
}
