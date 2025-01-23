<?php

namespace PackageSkeleton\Tests;

use Orchestra\Testbench\TestCase;
use PackageSkeleton\PackageServiceProvider;

class ExampleTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [PackageServiceProvider::class];
    }

    public function test_example()
    {
        $this->assertTrue(true);
    }
}