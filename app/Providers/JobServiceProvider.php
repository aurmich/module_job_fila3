<?php

/**
 * Class Modules\Job\Providers\JobServiceProvider.
 *
 * @see https://github.com/mooxphp/jobs/blob/main/src/JobManagerProvider.php
 */

declare(strict_types=1);

namespace Modules\Job\Providers;

use Filament\Actions\Exports\Models\Export;
use Filament\Actions\Imports\Models\Import;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Queue\Events\JobExceptionOccurred;
use Illuminate\Queue\Events\JobFailed;
use Illuminate\Queue\Events\JobProcessed;
use Illuminate\Queue\Events\JobProcessing;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\Schema;
use Modules\Job\Events\Executed;
use Modules\Job\Events\Executing;
use Modules\Job\Models\Task;
use Modules\Xot\Providers\XotBaseServiceProvider;

class JobServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'Job';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    public function boot(): void
    {
        parent::boot();

        Import::polymorphicUserRelationship();
        Export::polymorphicUserRelationship();
        $this->registerQueue();
    }

    public function registerQueue(): void
    {
        Queue::before(function (JobProcessing $event) {
            $this->jobStarted($event->job);
        });

        Queue::after(function (JobProcessed $event) {
            $this->jobFinished($event->job);
        });

        Queue::failing(function (JobFailed $event) {
            $this->jobFinished($event->job, true, $event->exception);
        });

        Queue::exceptionOccurred(function (JobExceptionOccurred $event) {
            $this->jobFinished($event->job, true, $event->exception);
        });
    }

    /**
     * @param \Illuminate\Contracts\Queue\Job $job
     */
    protected function jobStarted($job): void
    {
        // Implementazione del metodo jobStarted
        // Per ora lo lasciamo vuoto in attesa di implementazione specifica
    }

    /**
     * @param \Illuminate\Contracts\Queue\Job $job
     * @param bool $failed
     * @param \Throwable|null $exception
     */
    protected function jobFinished($job, bool $failed = false, ?\Throwable $exception = null): void
    {
        // Implementazione del metodo jobFinished
        // Per ora lo lasciamo vuoto in attesa di implementazione specifica
    }

    public function registerSchedule(Schedule $schedule): void
    {
        if (Schema::hasTable('tasks')) {
            $tasks = app(Task::class)
                ->query()
                ->with('frequencies')
                ->where('is_active', true)
                ->get();

            $tasks->each(function ($task) use ($schedule) {
                if (! $task instanceof Task) {
                    throw new \Exception('['.__LINE__.']['.class_basename($this).']');
                }

                $parameters = $task->compileParameters(true);
                if (!is_array($parameters)) {
                    $parameters = [];
                }

                // Costruire il comando di artisan o la funzione
                if ($task->isCommandTask()) {
                    // Convalidare il comando
                    $command = $task->command;
                    if (! is_string($command) || empty(trim($command))) {
                        return;
                    }

                    // Aggiungere i parametri
                    $scheduleEvent = $schedule->command($command, $parameters);
                    if (count($parameters) > 0) {
                        $scheduleEvent->withoutOverlapping();
                    }
                } else {
                    // Task personalizzato con funzione
                    $scheduleEvent = $schedule->call(function () use ($task) {
                        // Prima dell'esecuzione
                        event(new Executing($task));

                        // Eseguire l'azione
                        try {
                            $start = microtime(true);
                            $output = '';
                            app()->call([app($task->command), 'handle'], $task->compileParameters(false) ?? []);
                            event(new Executed($task, $start, $output));
                        } catch (\Throwable $e) {
                            report($e);
                            // Gestione errori
                        }
                    });
                }

                // Applicare la frequenza
                $frequencies = $task->frequencies;
                foreach ($frequencies as $frequency) {
                    $scheduleEvent = $this->applyFrequency($scheduleEvent, $frequency);
                }

                // Applicare opzioni
                $this->applyOptions($scheduleEvent, $task);
            });
        }
    }

    /**
     * Applica la frequenza all'evento pianificato.
     *
     * @param \Illuminate\Console\Scheduling\Event $event
     * @param object $frequency
     * @return \Illuminate\Console\Scheduling\Event
     */
    protected function applyFrequency($event, $frequency)
    {
        // Implementazione per applicare la frequenza all'evento pianificato
        return $event;
    }

    /**
     * Applica le opzioni all'evento pianificato.
     *
     * @param \Illuminate\Console\Scheduling\Event $event
     * @param Task $task
     * @return \Illuminate\Console\Scheduling\Event
     */
    protected function applyOptions($event, Task $task)
    {
        // Implementazione per applicare le opzioni all'evento pianificato
        return $event;
    }
}
