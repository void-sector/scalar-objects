<?php

require('vendor/autoload.php');

use Scalar\Validator\String as StringValidator;

class StringValidatorTest extends PHPUnit_Framework_TestCase
{

    protected $validator;


    protected function setUp()
    {
        $this->validator = new StringValidator;
    }
    
    
    public function testStringValidatorIsValid()
    {
        $this->assertTrue(
            $this->validator->isValid('Foo')
        );
    }
    
    
    public function testStringIsNotValid()
    {
        $this->assertFalse(
            $this->validator->isValid(32)
        );
    }
}
