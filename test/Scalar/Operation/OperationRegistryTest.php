<?php

use Scalar\Operation\OperationRegistry;
use Scalar\Operation\ToUpper;


class OperationRegistryTest extends PHPUnit_Framework_TestCase
{
    public function testGetOperation()
    {
        $toUpper = new ToUpper;

        $this->assertEquals(
            $toUpper,
            OperationRegistry::get('ToUpper')
        );
    }
}
