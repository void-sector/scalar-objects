<?php

use Scalar\Operation\StripTags;

class StripTagsTest extends PHPUnit_Framework_TestCase
{
    public function testStripTags()
    {
        $string = '<p>We <strong>Love</strong> <a href="http://www.google.nl">Foo</a> !!!</p>';

        $stripTags = new StripTags;

        $this->assertSame(
            'We Love Foo !!!',
            $stripTags->direct(
                $this->getMock('\Scalar\String', array('__construct'), array($string))
            )
        );
    }

    public function testStripTagsWithAllowedTag()
    {
        $string = '<p>We <strong>Love</strong> <a href="http://www.google.nl">Foo</a> !!!</p>';

        $stripTags = new StripTags;

        $this->assertSame(
            '<p>We Love Foo !!!</p>',
            $stripTags->direct(
                $this->getMock('\Scalar\String', array('__construct'), array($string)),
                '<p>'
            )
        );
    }
    
    public function testStripTagsWithMultipleAllowedTags()
    {
        $string = '<p>We <strong>Love</strong> <a href="http://www.google.nl">Foo</a> !!!</p>';

        $stripTags = new StripTags;

        $this->assertSame(
            '<p>We <strong>Love</strong> Foo !!!</p>',
            $stripTags->direct(
                $this->getMock('\Scalar\String', array('__construct'), array($string)),
                '<p><strong>'
            )
        );
    }
}
