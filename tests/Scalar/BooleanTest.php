<?php

require('vendor/autoload.php');

use Scalar\Boolean;

class BooleanTest extends PHPUnit_Framework_TestCase
{

    public function testBooleanGetValue()
    {
        $boolean = new Boolean(true);

        $this->assertSame(true, $boolean->getValue());
    }
    
    
    public function testBooleanSetNewValue()
    {
        $boolean = new Boolean(true);
        
        $boolean->setValue(false);
        
        $this->assertSame(false, $boolean->getValue());
    }    
    
    
    /**
     * @expectedException InvalidArgumentException
     */
    public function testNewBooleanWithNoneInterger()
    {
        new Boolean('Foo');
    }
    

    

    /**
     * @expectedException InvalidArgumentException
     */
    public function testBooleanSetValueAsStringArgument()
    {
        $boolean = new Boolean(true);
        
        $boolean->setValue('Foo');
    }
}
