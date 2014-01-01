<?php

use Scalar\Operation\ToLower;

class ToLowerTest extends PHPUnit_Framework_TestCase
{
    public function testToLower()
    {
        $string = 'We Love Foo';

        $toLower = new ToLower;

        $this->assertSame(
            $toLower->direct(
                $this->getMock('\Scalar\String', array('__construct'), array($string))
            ),
            strtolower($string)
        );
    }
}
