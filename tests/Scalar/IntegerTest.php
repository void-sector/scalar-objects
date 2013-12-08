<?php

require('vendor/autoload.php');

use Scalar\Integer;

class IntegerTest extends PHPUnit_Framework_TestCase
{

    public function testIntegerGetValue()
    {
        $integer = new Integer(12);

        $this->assertSame(12, $integer->getValue());
    }
    
    
    public function testIntegerSetNewValue()
    {
        $integer = new Integer(12);
        
        $integer->setValue(33);
        
        $this->assertSame(33, $integer->getValue());
    }    
    
    
    /**
     * @expectedException InvalidArgumentException
     */
    public function testNewIntegerWithNoneInterger()
    {
        new Integer(true);
    }
    

    

    /**
     * @expectedException InvalidArgumentException
     */
    public function testIntegerSetValueAsStringArgument()
    {
        $integer = new Integer(12);
        
        $integer->setValue('Foo');
    }
}
