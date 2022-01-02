<?php

declare(strict_types=1);

namespace FilipSedivy\PhpPackageTemplate\Tests;

use FilipSedivy\PhpPackageTemplate;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testExample(): void
    {
        $example = new PhpPackageTemplate\Example();

        $this->assertSame('bar', $example->foo());
    }
}
