<?php

declare(strict_types=1);

namespace Rulerpad\Informator;

class Informator implements InformatorInterface
{
    public function helloWord(): string
    {
        return 'Hello World';
    }
}
