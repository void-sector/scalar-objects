<?php

use Scalar\Bool;

class BoolTest extends PHPUnit_Framework_TestCase
{

    public function testBooleanGetValue()
    {
        $boolean = new Bool(true);

        $this->assertSame(true, $boolean->getValue());
    }
    
    
    public function testBooleanSetNewValue()
    {
        $boolean = new Bool(true);
        
        $boolean->setValue(false);
        
        $this->assertSame(false, $boolean->getValue());
    }    
    
    
    /**
     * @expectedException InvalidArgumentException
     */
    public function testNewBooleanWithNoneInterger()
    {
        new Bool('Foo');
    }
    

    

    /**
     * @expectedException InvalidArgumentException
     */
    public function testBooleanSetValueAsStringArgument()
    {
        $boolean = new Bool(true);
        
        $boolean->setValue('Foo');
    }
}
