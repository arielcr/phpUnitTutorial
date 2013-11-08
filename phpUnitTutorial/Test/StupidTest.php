<?php

namespace phpUnitTutorial\Test;

class StupidTest extends \PHPUnit_Framework_TestCase
{
    public function testTrueIsTrue()
    {
        // test to pass
        $foo = true;
        $this->assertTrue($foo);
    }
}