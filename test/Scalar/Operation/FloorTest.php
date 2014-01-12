<?php

use Scalar\Operation\Floor;

class FloorTest extends PHPUnit_Framework_TestCase
{
    public function testFloor()
    {
        $float = 13.0000001;
        $expect = 13.0;

        $floor = new Floor;

        $this->assertSame(
            $floor->direct(
                $this->getMock('\Scalar\Float', array('__construct'), array($float))
            ),
            $expect
        );
    }
}
