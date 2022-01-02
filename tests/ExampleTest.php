<?php

namespace FilipSedivy\PhpPackageTemplate\Tests;

use FilipSedivy\PhpPackageTemplate;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testExample()
    {
        $example = new PhpPackageTemplate\Example;

        $this->assertSame('bar', $example->foo());
    }
}
