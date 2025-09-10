<?php

declare(strict_types=1);

namespace Modules\Job\Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
<<<<<<< HEAD
use Tests\CreatesApplication;

/**
 * Base test case for Job module tests.
=======
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Modules\Xot\Tests\CreatesApplication;

/**
 * Base test case per il modulo Job.
 * 
 * ✅ USA DatabaseTransactions (NON RefreshDatabase)
 * ✅ Configurato per Pest
 * ✅ Performance ottimizzate
>>>>>>> a8a9f0b7 (.)
 */
abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
<<<<<<< HEAD

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
=======
    use DatabaseTransactions; // ✅ SEMPRE - Performance 100x migliori

    protected function setUp(): void
    {
        parent::setUp();
        
        // Ensure database is properly set up for testing
        $this->artisan('migrate:fresh');
        
        // Setup specifico del modulo se necessario
        $this->withoutExceptionHandling();
    }

>>>>>>> a8a9f0b7 (.)
    protected function getPackageProviders($app): array
    {
        return [
            \Modules\Job\Providers\JobServiceProvider::class,
        ];
    }
}
