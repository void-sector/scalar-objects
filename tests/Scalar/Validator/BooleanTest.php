<?php

require('vendor/autoload.php');

use Scalar\Validator\Boolean as BooleanValidator;

class BooleanValidatorTest extends PHPUnit_Framework_TestCase
{
    
    protected $validator;
    
    
    public function setUp()
    {
        $this->validator = new BooleanValidator;
    }    

    
    public function testBooleanValidatorIsValid()
    {
        $this->assertTrue(
            $this->validator->isValid(true)
        );
    }
    
    
    public function testBooleanIsNotValid()
    {
        $this->assertFalse(
            $this->validator->isValid('Foo')
        );
    }
}
