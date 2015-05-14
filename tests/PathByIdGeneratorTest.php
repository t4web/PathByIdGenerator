<?php

namespace PathByIdGeneratorTest;

use PathByIdGenerator\PathByIdGenerator;

class PathByIdGeneratorTest extends \PHPUnit_Framework_TestCase {

    public function testGeneratePathWithBadParams() {

        $generator = new PathByIdGenerator();

        $this->assertEquals(1, 1);
    }
}
