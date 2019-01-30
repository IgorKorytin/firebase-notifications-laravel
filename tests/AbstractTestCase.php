<?php

namespace AvtoDev\FirebaseNotificationsChannel\Tests;

use AvtoDev\FirebaseNotificationsChannel\LaravelPackageServiceProvider;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class AbstractTestCase extends BaseTestCase
{
    use Traits\CreatesApplicationTrait;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        parent::setUp();

        $this->app->register(LaravelPackageServiceProvider::class);
    }
}
