<?php

namespace phpUnitTutorial\Test;

use phpUnitTutorial\URL;

class URLTest extends \PHPUnit_Framework_TestCase
{
    public function testSluggifyReturnsSluggifiedString()
    {
		// Testing URL
        $originalString = 'This string will be sluggified';
        $expectedResult = 'this-string-will-be-sluggified';

        $url = new URL();

        $result = $url->sluggify($originalString);

        $this->assertEquals($expectedResult, $result);
    }
}
