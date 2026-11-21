<?php

declare(strict_types=1);

namespace ZamanTech\Sso\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use ZamanTech\Sso\SsoProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [SsoProvider::class];
    }
}
