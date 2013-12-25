<?php

require('vendor/autoload.php');

use Scalar\AbstractScalar;
use Scalar\Validator\ValidatorInterface;

class AbstractScalarTest extends PHPUnit_Framework_TestCase
{
    protected $value = "We love Foo";
    
    protected $abstractScalar;
    
    protected $validatorInterface;
    
    public function setUp()
    {
        $this->validatorInterface = $this->getMock("Scalar\Validator\ValidatorInterface");
        
        $this->abstractScalar = $this->getMockForAbstractClass(
            "Scalar\AbstractScalar",
            array(
                $this->validatorInterface,
                $this->value
            )
        );
    }
    
    
    public function testGetValue()
    {
        $this->assertSame(
            $this->abstractScalar->getValue(),
            $this->value
        );
    }
    
    public function testSetValue()
    {
        $this->abstractScalar->setValue("we rule the world");
        
        $this->assertSame(
            $this->abstractScalar->getValue("we rule the world"),
            "we rule the world"
        );
    }
    
}
