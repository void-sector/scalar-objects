<?php

use Scalar\Operation\Ceil;

class CeilTest extends PHPUnit_Framework_TestCase
{
    public function testCeil()
    {
        $float = 13.0000001;
        $expect = 14.0;
        
        $this->assertSame(
            Ceil::direct(
                $this->getMock('\Scalar\Float', array('__construct'), array($float))
            ),
            $expect
        );
    }
}
