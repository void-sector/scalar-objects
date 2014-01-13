<?php

use Scalar\Operation\Trim;

class TrimTest extends PHPUnit_Framework_TestCase
{
    public function testToLower()
    {
        $string = '     We Love Foo!    ';

        $trim = new Trim;

        $this->assertSame(
            'We Love Foo!',
            $trim->direct(
                $this->getMock('\Scalar\String', array('__construct'), array($string))
            )
        );
    }
}
