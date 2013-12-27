<?php

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



    public function testToString()
    {
        $this->abstractScalar->setValue("we rule the world");

        $this->assertSame(
            (string) $this->abstractScalar,
            "we rule the world"
        );
    }
    


    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Scalar\String expects a string as a parameter
     */
    public function testSetInvalidType()
    {
        $this->abstractScalar = $this->getMockForAbstractClass(
            "Scalar\AbstractScalar",
            array(
                new Scalar\Validator\String,
                22
            )
        );
    }


    public function testCallMagicMethod()
    {
        $this->assertSame(
            (string) $this->abstractScalar->toUpper(),
            'WE LOVE FOO'
        );
    }
}

