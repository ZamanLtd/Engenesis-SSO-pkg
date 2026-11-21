<?php

declare(strict_types=1);

namespace ZamanTech\Sso\Tests\Unit;

use Illuminate\Support\ServiceProvider;
use ZamanTech\Sso\Http\Controllers\SsoController;
use ZamanTech\Sso\Http\Controllers\SsoWebhook;
use ZamanTech\Sso\Http\Requests\SsoWebhookRequest;
use ZamanTech\Sso\SsoProvider;
use ZamanTech\Sso\Tests\TestCase;

class PackageTest extends TestCase
{
    public function test_package_classes_are_autoloadable(): void
    {
        $this->assertTrue(class_exists(SsoController::class));
        $this->assertTrue(class_exists(SsoWebhook::class));
        $this->assertTrue(class_exists(SsoWebhookRequest::class));
    }

    public function test_provider_registers_publishable_configuration(): void
    {
        $paths = ServiceProvider::pathsToPublish(provider: SsoProvider::class, group: 'zaman-tech-config');

        $this->assertSame(
            [realpath(__DIR__.'/../../src/config/zaman-tech.php') => config_path('zaman-tech.php')],
            $paths,
        );
    }
}
