<?php

require('vendor/autoload.php');

use Scalar\Validator\Integer as IntegerValidator;

class IntegerValidatorTest extends PHPUnit_Framework_TestCase
{
    
    protected $validator;

    
    public function setUp()
    {
        $this->validator = new IntegerValidator;
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
