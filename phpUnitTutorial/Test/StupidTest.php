<?php

namespace phpUnitTutorial\Test;

class StupidTest extends \PHPUnit_Framework_TestCase
{
    public function testTrueIsTrue()
    {
        // test to pass
        $var = true;
        $this->assertTrue($var);
    }
}