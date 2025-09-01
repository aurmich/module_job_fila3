<?php

declare(strict_types=1);

namespace Modules\Job\Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
<<<<<<< Updated upstream
<<<<<<< HEAD
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Modules\Xot\Tests\CreatesApplication;

/**
 * Base test case per il modulo Job.
 * 
 * ✅ USA DatabaseTransactions (NON RefreshDatabase)
 * ✅ Configurato per Pest
 * ✅ Performance ottimizzate
=======
use Tests\CreatesApplication;

/**
 * Base test case for Job module tests.
>>>>>>> 0c25c04 (.)
=======
use Tests\CreatesApplication;

/**
 * Base test case for Job module tests.
>>>>>>> Stashed changes
 */
abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
<<<<<<< Updated upstream
<<<<<<< HEAD
    use DatabaseTransactions; // ✅ SEMPRE - Performance 100x migliori
=======
>>>>>>> Stashed changes

    /**
     * Setup the test environment.
     */
    protected function setUp(): void
    {
        parent::setUp();

        // Load Job module specific configurations
        $this->loadLaravelMigrations();
        
        // Seed any required data for Job tests
        $this->artisan('module:seed', ['module' => 'Job']);
    }

<<<<<<< Updated upstream
=======

    /**
     * Setup the test environment.
     */
    protected function setUp(): void
    {
        parent::setUp();

        // Load Job module specific configurations
        $this->loadLaravelMigrations();
        
        // Seed any required data for Job tests
        $this->artisan('module:seed', ['module' => 'Job']);
    }

=======
>>>>>>> Stashed changes
    /**
     * Get package providers.
     *
     * @param \Illuminate\Foundation\Application $app
     * @return array<int, class-string>
     */
<<<<<<< Updated upstream
>>>>>>> 0c25c04 (.)
=======
>>>>>>> Stashed changes
    protected function getPackageProviders($app): array
    {
        return [
            \Modules\Job\Providers\JobServiceProvider::class,
        ];
    }
}
