<?php

namespace PathByIdGeneratorTest;

use PathByIdGenerator\PathByIdGenerator;

class PathByIdGeneratorTest extends \PHPUnit_Framework_TestCase
{
    private $generator;

    public function setUp()
    {
        $this->generator = new PathByIdGenerator();
    }

    public function testGeneratePathWithDefaultSettings()
    {
        $resultPath = $this->generator->generatePath(8252291);

        $this->assertEquals('/00/08/25/22/91', $resultPath);
    }

    public function testGeneratePathWithPathLenght()
    {
        $resultPath = $this->generator->generatePath(8252291, 12);

        $this->assertEquals('/00/00/08/25/22/91', $resultPath);
    }

    public function testGeneratePathWithStep()
    {
        $resultPath = $this->generator->generatePath(8252291, 12, 3);

        $this->assertEquals('/000/008/252/291', $resultPath);
    }

    public function testGeneratePathWithEmptyObjectId()
    {
        $this->setExpectedException('InvalidArgumentException');
        $this->setExpectedException('InvalidArgumentException', '$objectID must be numeric');

        $this->generator->generatePath('');
    }

    public function testGeneratePathWithBadParams()
    {
        $this->setExpectedException('InvalidArgumentException');
        $this->setExpectedException('InvalidArgumentException', '$objectID cannot be less than $pathLength');

        $this->generator->generatePath(8252291, 4);
    }
}
