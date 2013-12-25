<?php

use Scalar\Validator\Float as FloatValidator;

class FloatValidatorTest extends PHPUnit_Framework_TestCase
{

    protected $validator;
    
    
    public function setUp()
    {
        $this->validator = new FloatValidator;
    }
    
    
    public function testFloatValidatorIsValid()
    {
        $this->assertTrue(
            $this->validator->isValid(3.14159265359)
        );
    }
    
    
    public function testFloatIsNotValid()
    {
        $this->assertFalse(
            $this->validator->isValid('Foo')
        );
    }
}
