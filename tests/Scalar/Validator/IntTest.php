<?php

use Scalar\Validator\Int as IntValidator;

class IntegerValidatorTest extends PHPUnit_Framework_TestCase
{
    
    protected $validator;

    
    public function setUp()
    {
        $this->validator = new IntValidator;
    }
    
    
    public function testIntegerValidatorIsValid()
    {
        $this->assertTrue(
            $this->validator->isValid(32)
        );
    }
    
    
    public function testIntegerIsNotValid()
    {
        $this->assertFalse(
            $this->validator->isValid('Foo')
        );
    }
}
