<?php

declare(strict_types=1);

namespace Modules\Job\Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
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
 */
abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
<<<<<<< HEAD
    use DatabaseTransactions; // ✅ SEMPRE - Performance 100x migliori

    protected function setUp(): void
    {
        parent::setUp();
        
        // Ensure database is properly set up for testing
        $this->artisan('migrate:fresh');
        
        // Setup specifico del modulo se necessario
        $this->withoutExceptionHandling();
    }

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

    /**
     * Get package providers.
     *
     * @param \Illuminate\Foundation\Application $app
     * @return array<int, class-string>
     */
>>>>>>> 0c25c04 (.)
    protected function getPackageProviders($app): array
    {
        return [
            \Modules\Job\Providers\JobServiceProvider::class,
        ];
    }
}
