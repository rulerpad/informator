<?php

declare(strict_types=1);

namespace Rulerpad\Informator\Tests;

use PHPUnit\Framework\TestCase;
use Rulerpad\Informator\Informator;

class InformatorTest extends TestCase
{
    public function testHelloWorld(): void
    {
        $this->assertEquals('Hello World', (new Informator())->helloWord());
    }
}
