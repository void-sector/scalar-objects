<?php

require('vendor/autoload.php');

use Scalar\Validator\Bool as BoolValidator;

class BooleanValidatorTest extends PHPUnit_Framework_TestCase
{
    
    protected $validator;
    
    
    public function setUp()
    {
        $this->validator = new BoolValidator;
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
