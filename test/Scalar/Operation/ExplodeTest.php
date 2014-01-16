<?php

use Scalar\Operation\Explode;

class ExplodeTest extends PHPUnit_Framework_TestCase
{
    public function testExplodeWithoutLimit()
    {
        $string = 'We Love Foo !!!';

        $explode = new Explode;

        $this->assertSame(
            array('We','Love','Foo','!!!'
            ),
            $explode->direct(
                $this->getMock('\Scalar\String', array('__construct'), array($string)),
                ' '
            )
        );
    }

    public function testExplodeWithLimit()
    {
        $string = 'We Love Foo !!!';

        $explode = new Explode;

        $this->assertSame(
            array(
                'We',
                'Love Foo !!!'
            ),
            $explode->direct(
                $this->getMock('\Scalar\String', array('__construct'), array($string)),
                ' ',
                2
            )
        );
    }
}
