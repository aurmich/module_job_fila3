<?php

declare(strict_types=1);

namespace Modules\Job\Tests\Feature;

use Modules\Job\Models\Schedule;
use Modules\Job\Models\ScheduleHistory;
<<<<<<< HEAD
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;

class ScheduleBusinessLogicTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_schedule_with_basic_information(): void
    {
=======

beforeEach(function () {
    // Setup per ogni test se necessario
});

describe('Schedule Business Logic', function () {

    test('can create schedule with basic information', function () {
>>>>>>> a8a9f0b7 (.)
        $scheduleData = [
            'name' => 'Backup giornaliero',
            'description' => 'Backup automatico del database ogni giorno alle 2:00',
            'cron_expression' => '0 2 * * *',
            'timezone' => 'Europe/Rome',
            'is_active' => 1,
            'max_executions' => 1000,
            'retry_attempts' => 3,
            'retry_delay' => 300,
            'priority' => 'medium',
            'status' => 'active',
        ];

        $schedule = Schedule::create($scheduleData);

<<<<<<< HEAD
        $this->assertDatabaseHas('schedules', [
=======
        expect($schedule)->toBeInstanceOf(Schedule::class);
        expect($schedule->name)->toBe('Backup giornaliero');
        expect($schedule->cron_expression)->toBe('0 2 * * *');
        expect($schedule->timezone)->toBe('Europe/Rome');
        expect($schedule->is_active)->toBeTrue();

        expect($schedule)->toBeInDatabase('schedules', [
>>>>>>> a8a9f0b7 (.)
            'id' => $schedule->id,
            'name' => 'Backup giornaliero',
            'description' => 'Backup automatico del database ogni giorno alle 2:00',
            'cron_expression' => '0 2 * * *',
            'timezone' => 'Europe/Rome',
            'is_active' => 1,
        ]);
<<<<<<< HEAD

        $this->assertEquals('Backup giornaliero', $schedule->name);
        $this->assertEquals('0 2 * * *', $schedule->cron_expression);
        $this->assertEquals('Europe/Rome', $schedule->timezone);
        $this->assertTrue($schedule->is_active);
    }

    /** @test */
    public function it_can_manage_schedule_activation_and_deactivation(): void
    {
=======
    });

    test('can manage schedule activation and deactivation', function () {
>>>>>>> a8a9f0b7 (.)
        $schedule = Schedule::create([
            'name' => 'Test Schedule',
            'description' => 'Test Description',
            'cron_expression' => '0 * * * *',
            'timezone' => 'UTC',
            'is_active' => 1,
            'status' => 'active',
        ]);

<<<<<<< HEAD
        $this->assertTrue($schedule->is_active);
        $this->assertEquals('active', $schedule->status);
=======
        expect($schedule->is_active)->toBeTrue();
        expect($schedule->status)->toBe('active');
>>>>>>> a8a9f0b7 (.)

        // Disattiva lo schedule
        $schedule->update([
            'is_active' => 0,
            'status' => 'inactive',
        ]);

<<<<<<< HEAD
        $this->assertFalse($schedule->is_active);
        $this->assertEquals('inactive', $schedule->status);
    }

    /** @test */
    public function it_can_handle_schedule_cron_expressions(): void
    {
=======
        expect($schedule->is_active)->toBeFalse();
        expect($schedule->status)->toBe('inactive');
    });

    test('can handle schedule cron expressions', function () {
>>>>>>> a8a9f0b7 (.)
        $dailySchedule = Schedule::create([
            'name' => 'Daily Schedule',
            'description' => 'Eseguito ogni giorno',
            'cron_expression' => '0 9 * * *',
            'timezone' => 'UTC',
            'is_active' => 1,
            'status' => 'active',
        ]);

        $weeklySchedule = Schedule::create([
            'name' => 'Weekly Schedule',
            'description' => 'Eseguito ogni lunedì',
            'cron_expression' => '0 10 * * 1',
            'timezone' => 'UTC',
            'is_active' => 1,
            'status' => 'active',
        ]);

        $monthlySchedule = Schedule::create([
            'name' => 'Monthly Schedule',
            'description' => 'Eseguito il primo del mese',
            'cron_expression' => '0 8 1 * *',
            'timezone' => 'UTC',
            'is_active' => 1,
            'status' => 'active',
        ]);

<<<<<<< HEAD
        $this->assertEquals('0 9 * * *', $dailySchedule->cron_expression);
        $this->assertEquals('0 10 * * 1', $weeklySchedule->cron_expression);
        $this->assertEquals('0 8 1 * *', $monthlySchedule->cron_expression);
    }

    /** @test */
    public function it_can_manage_schedule_execution_limits(): void
    {
=======
        expect($dailySchedule->cron_expression)->toBe('0 9 * * *');
        expect($weeklySchedule->cron_expression)->toBe('0 10 * * 1');
        expect($monthlySchedule->cron_expression)->toBe('0 8 1 * *');
    });

    test('can manage schedule execution limits', function () {
>>>>>>> a8a9f0b7 (.)
        $schedule = Schedule::create([
            'name' => 'Limited Schedule',
            'description' => 'Schedule con limiti di esecuzione',
            'cron_expression' => '*/15 * * * *',
            'timezone' => 'UTC',
            'is_active' => 1,
            'status' => 'active',
            'max_executions' => 100,
            'retry_attempts' => 5,
            'retry_delay' => 600,
        ]);

<<<<<<< HEAD
        $this->assertEquals(100, $schedule->max_executions);
        $this->assertEquals(5, $schedule->retry_attempts);
        $this->assertEquals(600, $schedule->retry_delay);
    }

    /** @test */
    public function it_can_handle_schedule_priority_management(): void
    {
=======
        expect($schedule->max_executions)->toBe(100);
        expect($schedule->retry_attempts)->toBe(5);
        expect($schedule->retry_delay)->toBe(600);
    });

    test('can handle schedule priority management', function () {
>>>>>>> a8a9f0b7 (.)
        $highPrioritySchedule = Schedule::create([
            'name' => 'High Priority',
            'description' => 'Schedule alta priorità',
            'cron_expression' => '*/5 * * * *',
            'timezone' => 'UTC',
            'is_active' => 1,
            'status' => 'active',
            'priority' => 'high',
        ]);

        $mediumPrioritySchedule = Schedule::create([
            'name' => 'Medium Priority',
            'description' => 'Schedule media priorità',
            'cron_expression' => '0 * * * *',
            'timezone' => 'UTC',
            'is_active' => 1,
            'status' => 'active',
            'priority' => 'medium',
        ]);

        $lowPrioritySchedule = Schedule::create([
            'name' => 'Low Priority',
            'description' => 'Schedule bassa priorità',
            'cron_expression' => '0 2 * * *',
            'timezone' => 'UTC',
            'is_active' => 1,
            'status' => 'active',
            'priority' => 'low',
        ]);

<<<<<<< HEAD
        $this->assertEquals('high', $highPrioritySchedule->priority);
        $this->assertEquals('medium', $mediumPrioritySchedule->priority);
        $this->assertEquals('low', $lowPrioritySchedule->priority);
    }

    /** @test */
    public function it_can_manage_schedule_timezone_handling(): void
    {
=======
        expect($highPrioritySchedule->priority)->toBe('high');
        expect($mediumPrioritySchedule->priority)->toBe('medium');
        expect($lowPrioritySchedule->priority)->toBe('low');
    });

    test('can manage schedule timezone handling', function () {
>>>>>>> a8a9f0b7 (.)
        $romeSchedule = Schedule::create([
            'name' => 'Rome Schedule',
            'description' => 'Schedule fuso orario Roma',
            'cron_expression' => '0 9 * * 1',
            'timezone' => 'Europe/Rome',
            'is_active' => 1,
            'status' => 'active',
        ]);

        $utcSchedule = Schedule::create([
            'name' => 'UTC Schedule',
            'description' => 'Schedule UTC',
            'cron_expression' => '0 9 * * 1',
            'timezone' => 'UTC',
            'is_active' => 1,
            'status' => 'active',
        ]);

        $tokyoSchedule = Schedule::create([
            'name' => 'Tokyo Schedule',
            'description' => 'Schedule fuso orario Tokyo',
            'cron_expression' => '0 9 * * 1',
            'timezone' => 'Asia/Tokyo',
            'is_active' => 1,
            'status' => 'active',
        ]);

<<<<<<< HEAD
        $this->assertEquals('Europe/Rome', $romeSchedule->timezone);
        $this->assertEquals('UTC', $utcSchedule->timezone);
        $this->assertEquals('Asia/Tokyo', $tokyoSchedule->timezone);
    }

    /** @test */
    public function it_can_handle_schedule_status_transitions(): void
    {
=======
        expect($romeSchedule->timezone)->toBe('Europe/Rome');
        expect($utcSchedule->timezone)->toBe('UTC');
        expect($tokyoSchedule->timezone)->toBe('Asia/Tokyo');
    });

    test('can handle schedule status transitions', function () {
>>>>>>> a8a9f0b7 (.)
        $schedule = Schedule::create([
            'name' => 'Status Test Schedule',
            'description' => 'Test transizioni stato',
            'cron_expression' => '0 * * * *',
            'timezone' => 'UTC',
            'is_active' => 1,
            'status' => 'active',
        ]);

<<<<<<< HEAD
        $this->assertEquals('active', $schedule->status);

        // Cambia stato a pausa
        $schedule->update(['status' => 'paused']);
        $this->assertEquals('paused', $schedule->status);

        // Cambia stato a errore
        $schedule->update(['status' => 'error']);
        $this->assertEquals('error', $schedule->status);

        // Cambia stato a manutenzione
        $schedule->update(['status' => 'maintenance']);
        $this->assertEquals('maintenance', $schedule->status);

        // Ripristina stato attivo
        $schedule->update(['status' => 'active']);
        $this->assertEquals('active', $schedule->status);
    }

    /** @test */
    public function it_can_manage_schedule_history_and_logging(): void
    {
=======
        expect($schedule->status)->toBe('active');

        // Cambia stato a pausa
        $schedule->update(['status' => 'paused']);
        expect($schedule->status)->toBe('paused');

        // Cambia stato a errore
        $schedule->update(['status' => 'error']);
        expect($schedule->status)->toBe('error');

        // Cambia stato a manutenzione
        $schedule->update(['status' => 'maintenance']);
        expect($schedule->status)->toBe('maintenance');

        // Ripristina stato attivo
        $schedule->update(['status' => 'active']);
        expect($schedule->status)->toBe('active');
    });

    test('can manage schedule history and logging', function () {
>>>>>>> a8a9f0b7 (.)
        $schedule = Schedule::create([
            'name' => 'History Test Schedule',
            'description' => 'Test cronologia esecuzioni',
            'cron_expression' => '0 * * * *',
            'timezone' => 'UTC',
            'is_active' => 1,
            'status' => 'active',
        ]);

        // Crea cronologia esecuzioni
        $history1 = ScheduleHistory::create([
            'schedule_id' => $schedule->id,
            'executed_at' => now()->subHour(),
            'status' => 'success',
            'output' => 'Esecuzione completata con successo',
            'execution_time' => 5.2,
        ]);

        $history2 = ScheduleHistory::create([
            'schedule_id' => $schedule->id,
            'executed_at' => now(),
            'status' => 'running',
            'output' => 'Esecuzione in corso',
            'execution_time' => null,
        ]);

<<<<<<< HEAD
        $this->assertCount(2, $schedule->scheduleHistories);
        $this->assertTrue($schedule->scheduleHistories->contains($history1));
        $this->assertTrue($schedule->scheduleHistories->contains($history2));
    }

    /** @test */
    public function it_can_handle_schedule_retry_logic(): void
    {
=======
        expect($schedule->scheduleHistories)->toHaveCount(2);
        expect($schedule->scheduleHistories->contains($history1))->toBeTrue();
        expect($schedule->scheduleHistories->contains($history2))->toBeTrue();
    });

    test('can handle schedule retry logic', function () {
>>>>>>> a8a9f0b7 (.)
        $schedule = Schedule::create([
            'name' => 'Retry Test Schedule',
            'description' => 'Test logica retry',
            'cron_expression' => '0 * * * *',
            'timezone' => 'UTC',
            'is_active' => 1,
            'status' => 'active',
            'retry_attempts' => 3,
            'retry_delay' => 300,
        ]);

<<<<<<< HEAD
        $this->assertEquals(3, $schedule->retry_attempts);
        $this->assertEquals(300, $schedule->retry_delay);

        // Simula fallimento e retry
        $schedule->update(['status' => 'failed']);
        $this->assertEquals('failed', $schedule->status);

        // Simula retry
        $schedule->update(['status' => 'retrying']);
        $this->assertEquals('retrying', $schedule->status);
    }

    /** @test */
    public function it_can_handle_schedule_execution_tracking(): void
    {
=======
        expect($schedule->retry_attempts)->toBe(3);
        expect($schedule->retry_delay)->toBe(300);

        // Simula fallimento e retry
        $schedule->update(['status' => 'failed']);
        expect($schedule->status)->toBe('failed');

        // Simula retry
        $schedule->update(['status' => 'retrying']);
        expect($schedule->status)->toBe('retrying');
    });

    test('can handle schedule execution tracking', function () {
>>>>>>> a8a9f0b7 (.)
        $schedule = Schedule::create([
            'name' => 'Execution Test Schedule',
            'description' => 'Test tracking esecuzioni',
            'cron_expression' => '0 * * * *',
            'timezone' => 'UTC',
            'is_active' => 1,
            'status' => 'active',
            'max_executions' => 1000,
        ]);

<<<<<<< HEAD
        $this->assertEquals(1000, $schedule->max_executions);
=======
        expect($schedule->max_executions)->toBe(1000);
>>>>>>> a8a9f0b7 (.)

        // Simula esecuzioni multiple
        for ($i = 1; $i <= 5; $i++) {
            ScheduleHistory::create([
                'schedule_id' => $schedule->id,
                'executed_at' => now()->subMinutes($i * 10),
                'status' => 'success',
                'output' => "Esecuzione {$i} completata",
                'execution_time' => rand(1, 10),
            ]);
        }

<<<<<<< HEAD
        $this->assertCount(5, $schedule->scheduleHistories);
    }

    /** @test */
    public function it_can_handle_schedule_validation_and_constraints(): void
    {
=======
        expect($schedule->scheduleHistories)->toHaveCount(5);
    });

    test('can handle schedule validation and constraints', function () {
>>>>>>> a8a9f0b7 (.)
        // Schedule con espressione cron valida
        $validSchedule = Schedule::create([
            'name' => 'Valid Schedule',
            'description' => 'Schedule valido',
            'cron_expression' => '0 9 * * 1-5',
            'timezone' => 'UTC',
            'is_active' => 1,
            'status' => 'active',
        ]);

<<<<<<< HEAD
        $this->assertNotNull($validSchedule->id);
=======
        expect($validSchedule->id)->not->toBeNull();
>>>>>>> a8a9f0b7 (.)

        // Schedule con espressione cron complessa
        $complexSchedule = Schedule::create([
            'name' => 'Complex Schedule',
            'description' => 'Schedule con espressione complessa',
            'cron_expression' => '0 9-17 * * 1-5',
            'timezone' => 'UTC',
            'is_active' => 1,
            'status' => 'active',
        ]);

<<<<<<< HEAD
        $this->assertNotNull($complexSchedule->id);
    }

    /** @test */
    public function it_can_handle_schedule_batch_operations(): void
    {
        // Crea un batch di schedule
        $batchSchedules = [];
        $priorities = ['high', 'medium', 'low'];
        
=======
        expect($complexSchedule->id)->not->toBeNull();
    });

    test('can handle schedule batch operations', function () {
        // Crea un batch di schedule
        $batchSchedules = [];
        $priorities = ['high', 'medium', 'low'];

>>>>>>> a8a9f0b7 (.)
        for ($i = 1; $i <= 3; $i++) {
            $batchSchedules[] = Schedule::create([
                'name' => "Batch Schedule {$i}",
                'description' => "Schedule batch numero {$i}",
                'cron_expression' => "0 {$i} * * *",
                'timezone' => 'UTC',
                'is_active' => 1,
                'status' => 'active',
                'priority' => $priorities[$i - 1],
            ]);
        }

<<<<<<< HEAD
        $this->assertCount(3, $batchSchedules);
        
        foreach ($batchSchedules as $index => $schedule) {
            $this->assertEquals("Batch Schedule " . ($index + 1), $schedule->name);
            $this->assertEquals("0 " . ($index + 1) . " * * *", $schedule->cron_expression);
            $this->assertEquals($priorities[$index], $schedule->priority);
        }
    }
}
=======
        expect($batchSchedules)->toHaveCount(3);

        foreach ($batchSchedules as $index => $schedule) {
            expect($schedule->name)->toBe('Batch Schedule '.($index + 1));
            expect($schedule->cron_expression)->toBe('0 '.($index + 1).' * * *');
            expect($schedule->priority)->toBe($priorities[$index]);
        }
    });

});
>>>>>>> a8a9f0b7 (.)
