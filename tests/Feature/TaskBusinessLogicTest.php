<?php

declare(strict_types=1);

namespace Modules\Job\Tests\Feature;

<<<<<<< HEAD
use Modules\Job\Models\Task;
use Modules\Job\Models\Frequency;
use Modules\Job\Models\Result;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;

class TaskBusinessLogicTest extends TestCase
{
    use RefreshDatabase;
=======
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Modules\Job\Models\Frequency;
use Modules\Job\Models\Result;
use Modules\Job\Models\Task;
use Tests\TestCase;

class TaskBusinessLogicTest extends TestCase
{

>>>>>>> a8a9f0b7 (.)

    /** @test */
    public function it_can_create_task_with_basic_information(): void
    {
        $taskData = [
            'description' => 'Pulizia database giornaliera',
            'command' => 'db:cleanup',
            'parameters' => '--days=30 --tables=logs,sessions',
            'expression' => '0 2 * * *', // Ogni giorno alle 2:00
            'timezone' => 'Europe/Rome',
            'is_active' => 1,
            'dont_overlap' => 1,
            'run_in_maintenance' => 0,
            'notification_email_address' => 'admin@example.com',
            'run_on_one_server' => 1,
            'run_in_background' => 1,
            'auto_cleanup_num' => 7,
            'auto_cleanup_type' => 'days',
            'priority_id' => 'high',
            'status' => 'active',
        ];

        $task = Task::create($taskData);

        $this->assertDatabaseHas('tasks', [
            'id' => $task->id,
            'description' => 'Pulizia database giornaliera',
            'command' => 'db:cleanup',
            'expression' => '0 2 * * *',
            'timezone' => 'Europe/Rome',
            'is_active' => 1,
        ]);

<<<<<<< HEAD
        $this->assertEquals('Pulizia database giornaliera', $task->description);
        $this->assertEquals('db:cleanup', $task->command);
        $this->assertEquals('0 2 * * *', $task->expression);
        $this->assertTrue($task->is_active);
=======
        expect('Pulizia database giornaliera', $task->description);
        expect('db:cleanup', $task->command);
        expect('0 2 * * *', $task->expression);
        expect($task->is_active);
>>>>>>> a8a9f0b7 (.)
    }

    /** @test */
    public function it_can_manage_task_activation_and_deactivation(): void
    {
        $task = Task::create([
            'description' => 'Test Task',
            'command' => 'test:command',
            'expression' => '0 * * * *',
            'timezone' => 'UTC',
            'is_active' => 1,
            'status' => 'active',
        ]);

<<<<<<< HEAD
        $this->assertTrue($task->is_active);
        $this->assertEquals('active', $task->status);
=======
        expect($task->is_active);
        expect('active', $task->status);
>>>>>>> a8a9f0b7 (.)

        // Disattiva il task
        $task->update([
            'is_active' => 0,
            'status' => 'inactive',
        ]);

<<<<<<< HEAD
        $this->assertFalse($task->is_active);
        $this->assertEquals('inactive', $task->status);
=======
        expect($task->is_active);
        expect('inactive', $task->status);
>>>>>>> a8a9f0b7 (.)
    }

    /** @test */
    public function it_can_handle_task_parameters_and_compilation(): void
    {
        $task = Task::create([
            'description' => 'Task con parametri',
            'command' => 'user:process',
            'parameters' => '--user-id={{user_id}} --action={{action}}',
            'expression' => '0 1 * * *',
            'timezone' => 'UTC',
            'is_active' => 1,
            'status' => 'active',
        ]);

        // Compila parametri per lo scheduler
        $schedulerParams = $task->compileParameters(true);
<<<<<<< HEAD
        $this->assertEquals('--user-id={{user_id}} --action={{action}}', $schedulerParams);

        // Compila parametri per l'esecuzione
        $executionParams = $task->compileParameters(false);
        $this->assertEquals('--user-id={{user_id}} --action={{action}}', $executionParams);
=======
        expect('--user-id={{user_id}} --action={{action}}', $schedulerParams);

        // Compila parametri per l'esecuzione
        $executionParams = $task->compileParameters(false);
        expect('--user-id={{user_id}} --action={{action}}', $executionParams);
>>>>>>> a8a9f0b7 (.)
    }

    /** @test */
    public function it_can_manage_task_frequencies(): void
    {
        $task = Task::create([
            'description' => 'Task con frequenze',
            'command' => 'report:generate',
            'expression' => '0 9 * * 1', // Ogni lunedì alle 9:00
            'timezone' => 'UTC',
            'is_active' => 1,
            'status' => 'active',
        ]);

        // Crea frequenze associate
        $frequency1 = Frequency::create([
            'task_id' => $task->id,
            'frequency' => 'daily',
            'parameters' => json_encode(['time' => '09:00']),
        ]);

        $frequency2 = Frequency::create([
            'task_id' => $task->id,
            'frequency' => 'weekly',
            'parameters' => json_encode(['day' => 'monday', 'time' => '09:00']),
        ]);

<<<<<<< HEAD
        $this->assertCount(2, $task->frequencies);
        $this->assertTrue($task->frequencies->contains($frequency1));
        $this->assertTrue($task->frequencies->contains($frequency2));
=======
        expect(2, $task->frequencies);
        expect($task->frequencies->contains($frequency1));
        expect($task->frequencies->contains($frequency2));
>>>>>>> a8a9f0b7 (.)
    }

    /** @test */
    public function it_can_handle_task_notifications(): void
    {
        $task = Task::create([
            'description' => 'Task con notifiche',
            'command' => 'backup:create',
            'expression' => '0 3 * * *',
            'timezone' => 'UTC',
            'is_active' => 1,
            'status' => 'active',
            'notification_email_address' => 'admin@example.com',
            'notification_phone_number' => '+1234567890',
            'notification_slack_webhook' => 'https://hooks.slack.com/services/...',
        ]);

<<<<<<< HEAD
        $this->assertEquals('admin@example.com', $task->notification_email_address);
        $this->assertEquals('+1234567890', $task->notification_phone_number);
        $this->assertEquals('https://hooks.slack.com/services/...', $task->notification_slack_webhook);
=======
        expect('admin@example.com', $task->notification_email_address);
        expect('+1234567890', $task->notification_phone_number);
        expect('https://hooks.slack.com/services/...', $task->notification_slack_webhook);
>>>>>>> a8a9f0b7 (.)
    }

    /** @test */
    public function it_can_manage_task_execution_settings(): void
    {
        $task = Task::create([
            'description' => 'Task con impostazioni esecuzione',
            'command' => 'heavy:process',
            'expression' => '0 */6 * * *',
            'timezone' => 'UTC',
            'is_active' => 1,
            'status' => 'active',
            'dont_overlap' => 1,
            'run_in_maintenance' => 1,
            'run_on_one_server' => 1,
            'run_in_background' => 1,
        ]);

<<<<<<< HEAD
        $this->assertTrue($task->dont_overlap);
        $this->assertTrue($task->run_in_maintenance);
        $this->assertTrue($task->run_on_one_server);
        $this->assertTrue($task->run_in_background);
=======
        expect($task->dont_overlap);
        expect($task->run_in_maintenance);
        expect($task->run_on_one_server);
        expect($task->run_in_background);
>>>>>>> a8a9f0b7 (.)
    }

    /** @test */
    public function it_can_handle_task_cleanup_settings(): void
    {
        $task = Task::create([
            'description' => 'Task con pulizia automatica',
            'command' => 'logs:cleanup',
            'expression' => '0 4 * * *',
            'timezone' => 'UTC',
            'is_active' => 1,
            'status' => 'active',
            'auto_cleanup_num' => 30,
            'auto_cleanup_type' => 'days',
        ]);

<<<<<<< HEAD
        $this->assertEquals(30, $task->auto_cleanup_num);
        $this->assertEquals('days', $task->auto_cleanup_type);
=======
        expect(30, $task->auto_cleanup_num);
        expect('days', $task->auto_cleanup_type);
>>>>>>> a8a9f0b7 (.)
    }

    /** @test */
    public function it_can_manage_task_results_and_history(): void
    {
        $task = Task::create([
            'description' => 'Task con risultati',
            'command' => 'test:command',
            'expression' => '0 * * * *',
            'timezone' => 'UTC',
            'is_active' => 1,
            'status' => 'active',
        ]);

        // Crea risultati associati
        $result1 = Result::create([
            'task_id' => $task->id,
            'started_at' => now()->subHour(),
            'finished_at' => now()->subHour()->addMinutes(5),
            'result' => 'success',
            'output' => 'Task completato con successo',
        ]);

        $result2 = Result::create([
            'task_id' => $task->id,
            'started_at' => now(),
            'finished_at' => null,
            'result' => 'running',
            'output' => 'Task in esecuzione',
        ]);

<<<<<<< HEAD
        $this->assertCount(2, $task->results);
        $this->assertTrue($task->results->contains($result1));
        $this->assertTrue($task->results->contains($result2));
=======
        expect(2, $task->results);
        expect($task->results->contains($result1));
        expect($task->results->contains($result2));
>>>>>>> a8a9f0b7 (.)
    }

    /** @test */
    public function it_can_handle_task_priority_management(): void
    {
        $highPriorityTask = Task::create([
            'description' => 'Task alta priorità',
            'command' => 'critical:process',
            'expression' => '*/5 * * * *',
            'timezone' => 'UTC',
            'is_active' => 1,
            'status' => 'active',
            'priority_id' => 'high',
        ]);

        $lowPriorityTask = Task::create([
            'description' => 'Task bassa priorità',
            'command' => 'maintenance:cleanup',
            'expression' => '0 2 * * *',
            'timezone' => 'UTC',
            'is_active' => 1,
            'status' => 'active',
            'priority_id' => 'low',
        ]);

<<<<<<< HEAD
        $this->assertEquals('high', $highPriorityTask->priority_id);
        $this->assertEquals('low', $lowPriorityTask->priority_id);
=======
        expect('high', $highPriorityTask->priority_id);
        expect('low', $lowPriorityTask->priority_id);
>>>>>>> a8a9f0b7 (.)
    }

    /** @test */
    public function it_can_manage_task_timezone_handling(): void
    {
        $romeTask = Task::create([
            'description' => 'Task Roma',
            'command' => 'local:process',
            'expression' => '0 9 * * 1',
            'timezone' => 'Europe/Rome',
            'is_active' => 1,
            'status' => 'active',
        ]);

        $utcTask = Task::create([
            'description' => 'Task UTC',
            'command' => 'global:process',
            'expression' => '0 9 * * 1',
            'timezone' => 'UTC',
            'is_active' => 1,
            'status' => 'active',
        ]);

<<<<<<< HEAD
        $this->assertEquals('Europe/Rome', $romeTask->timezone);
        $this->assertEquals('UTC', $utcTask->timezone);
=======
        expect('Europe/Rome', $romeTask->timezone);
        expect('UTC', $utcTask->timezone);
>>>>>>> a8a9f0b7 (.)
    }

    /** @test */
    public function it_can_handle_task_status_transitions(): void
    {
        $task = Task::create([
            'description' => 'Task con transizioni stato',
            'command' => 'status:test',
            'expression' => '0 * * * *',
            'timezone' => 'UTC',
            'is_active' => 1,
            'status' => 'active',
        ]);

<<<<<<< HEAD
        $this->assertEquals('active', $task->status);

        // Cambia stato a pausa
        $task->update(['status' => 'paused']);
        $this->assertEquals('paused', $task->status);

        // Cambia stato a errore
        $task->update(['status' => 'error']);
        $this->assertEquals('error', $task->status);

        // Ripristina stato attivo
        $task->update(['status' => 'active']);
        $this->assertEquals('active', $task->status);
=======
        expect('active', $task->status);

        // Cambia stato a pausa
        $task->update(['status' => 'paused']);
        expect('paused', $task->status);

        // Cambia stato a errore
        $task->update(['status' => 'error']);
        expect('error', $task->status);

        // Ripristina stato attivo
        $task->update(['status' => 'active']);
        expect('active', $task->status);
>>>>>>> a8a9f0b7 (.)
    }

    /** @test */
    public function it_can_handle_task_ordering_and_sorting(): void
    {
        $task1 = Task::create([
            'description' => 'Primo task',
            'command' => 'first:command',
            'expression' => '0 1 * * *',
            'timezone' => 'UTC',
            'is_active' => 1,
            'status' => 'active',
            'order_column' => 1,
        ]);

        $task2 = Task::create([
            'description' => 'Secondo task',
            'command' => 'second:command',
            'expression' => '0 2 * * *',
            'timezone' => 'UTC',
            'is_active' => 1,
            'status' => 'active',
            'order_column' => 2,
        ]);

<<<<<<< HEAD
        $this->assertEquals(1, $task1->order_column);
        $this->assertEquals(2, $task2->order_column);
=======
        expect(1, $task1->order_column);
        expect(2, $task2->order_column);
>>>>>>> a8a9f0b7 (.)
    }

    /** @test */
    public function it_can_handle_task_maintenance_mode(): void
    {
        $maintenanceTask = Task::create([
            'description' => 'Task manutenzione',
            'command' => 'maintenance:task',
            'expression' => '0 3 * * *',
            'timezone' => 'UTC',
            'is_active' => 1,
            'status' => 'active',
            'run_in_maintenance' => 1,
        ]);

        $normalTask = Task::create([
            'description' => 'Task normale',
            'command' => 'normal:task',
            'expression' => '0 4 * * *',
            'timezone' => 'UTC',
            'is_active' => 1,
            'status' => 'active',
            'run_in_maintenance' => 0,
        ]);

<<<<<<< HEAD
        $this->assertTrue($maintenanceTask->run_in_maintenance);
        $this->assertFalse($normalTask->run_in_maintenance);
=======
        expect($maintenanceTask->run_in_maintenance);
        expect($normalTask->run_in_maintenance);
>>>>>>> a8a9f0b7 (.)
    }
}
