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
                $this->getMockForAbstractClass(
                    'Scalar\AbstractScalar',
                    array(
                        $this->getMock('Scalar\Validator\ValidatorInterface'),
                        $float
                    )
                )
            ),
            $expect
        );
    }
}
