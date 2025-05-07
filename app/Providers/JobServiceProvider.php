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
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Illuminate\Contracts\Queue\Job;
=======
>>>>>>> origin/dev
>>>>>>> 8862046 (.)
=======
use Illuminate\Contracts\Queue\Job;
>>>>>>> 10aecc0 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD

=======
<<<<<<< HEAD
use Throwable;

=======
use Throwable;

>>>>>>> 10aecc0 (.)
/**
 * Class JobServiceProvider
 * 
 * Service Provider principale del modulo Job
 */
<<<<<<< HEAD
=======

>>>>>>> origin/dev
>>>>>>> 8862046 (.)
=======
>>>>>>> 10aecc0 (.)
class JobServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'Job';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
    /**
     * Inizializza il provider
     */
    public function boot(): void
    {
        parent::boot();

        Import::polymorphicUserRelationship();
        Export::polymorphicUserRelationship();
        
        $this->registerQueue();
    }

    /**
     * Registra gli handler per gli eventi della coda
     */
    public function registerQueue(): void
    {
        Queue::before(function (JobProcessing $event): void {
            $this->jobStarted($event->job);
        });

        Queue::after(function (JobProcessed $event): void {
            $this->jobFinished($event->job);
        });

        Queue::failing(function (JobFailed $event): void {
            $this->jobFinished($event->job, true, $event->exception);
        });

        Queue::exceptionOccurred(function (JobExceptionOccurred $event): void {
=======
>>>>>>> 8862046 (.)
=======
    /**
     * Inizializza il provider
     */
>>>>>>> 10aecc0 (.)
    public function boot(): void
    {
        parent::boot();

        Import::polymorphicUserRelationship();
        Export::polymorphicUserRelationship();
        
        $this->registerQueue();
    }

    /**
     * Registra gli handler per gli eventi della coda
     */
    public function registerQueue(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        /*
        Queue::before(static function (JobProcessing $event) {
           self::jobStarted($event->job);
        });

        Queue::after(static function (JobProcessed $event) {
           self::jobFinished($event->job);
        });

        Queue::failing(static function (JobFailed $event) {
           self::jobFinished($event->job, true, $event->exception);
        });

        Queue::exceptionOccurred(static function (JobExceptionOccurred $event) {
           self::jobFinished($event->job, true, $event->exception);
        });
        */
    }

    /*
    public function registerSchedule(Schedule $schedule): void {
=======
        Queue::before(function (JobProcessing $event) {
=======
        Queue::before(function (JobProcessing $event): void {
>>>>>>> 10aecc0 (.)
            $this->jobStarted($event->job);
        });

        Queue::after(function (JobProcessed $event): void {
            $this->jobFinished($event->job);
        });

        Queue::failing(function (JobFailed $event): void {
            $this->jobFinished($event->job, true, $event->exception);
        });

<<<<<<< HEAD
        Queue::exceptionOccurred(function (JobExceptionOccurred $event) {
>>>>>>> origin/dev
=======
        Queue::exceptionOccurred(function (JobExceptionOccurred $event): void {
>>>>>>> 10aecc0 (.)
            $this->jobFinished($event->job, true, $event->exception);
        });
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Gestisce l'inizio dell'esecuzione di un job
     */
    protected function jobStarted(Job $job): void
    {
        if ($job instanceof Task) {
            event(new Executing($job));
        }
    }

    /**
     * Gestisce la fine dell'esecuzione di un job
     */
    protected function jobFinished(Job $job, bool $failed = false, ?Throwable $exception = null): void
    {
        if ($job instanceof Task) {
            $start = microtime(true);
            $output = $exception ? $exception->getMessage() : '';
            event(new Executed($job, $start, $output));
        }
    }

    /**
     * Registra i task schedulati
     */
    public function registerSchedule(Schedule $schedule): void 
    {
        if (!Schema::hasTable('tasks')) {
            return;
        }

        $tasks = app(Task::class)
            ->query()
            ->with('frequencies')
            ->where('is_active', true)
            ->get();

        $tasks->each(function ($task) use ($schedule): void {
            if (!$task instanceof Task) {
                return;
            }

            $event = $schedule->command($task->command, $task->parameters ?? []);
            
            foreach ($task->frequencies as $frequency) {
                $event->{$frequency->interval}();
            }
        });
=======
     * @param \Illuminate\Contracts\Queue\Job $job
=======
     * Gestisce l'inizio dell'esecuzione di un job
>>>>>>> 10aecc0 (.)
     */
    protected function jobStarted(Job $job): void
    {
<<<<<<< HEAD
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
>>>>>>> 8862046 (.)
        if (Schema::hasTable('tasks')) {
            $tasks = app(Task::class)
                ->query()
                ->with('frequencies')
                ->where('is_active', true)
                ->get();

<<<<<<< HEAD
            $tasks->each(
                function ($task) use ($schedule) {
                    if (! $task instanceof Task) {
                        throw new \Exception('['.__LINE__.']['.class_basename($this).']');
                    }
                    //
                    // var \Illuminate\Console\Scheduling\Event
                    //
                    $event = $schedule->command($task->command, $task->compileParameters(true));
                    // --- funziona solo con daily per ora
                    $event->{$task->expression}()
                        ->name($task->description)
                        ->timezone($task->timezone)
                        ->before(function () use ($task) {
                            //Access to an undefined property Illuminate\Console\Scheduling\Event::$start.
                            //$event->start = microtime(true);
                            Executing::dispatch($task);
                        })
                        ->thenWithOutput(function ($output) use ($event, $task) {
                            Executed::dispatch($task, $event->start ?? microtime(true), $output);
                        });
                    if ($task->dont_overlap) {
                        $event->withoutOverlapping();
                    }
                    if ($task->run_in_maintenance) {
                        $event->evenInMaintenanceMode();
                    }
                    if ($task->run_on_one_server && in_array(config('cache.default'), ['memcached', 'redis', 'database', 'dynamodb'])) {
                        $event->onOneServer();
                    }
                    if ($task->run_in_background) {
                        $event->runInBackground();
                    }
                });
        }
    }
    */
=======
            $tasks->each(function ($task) use ($schedule) {
                if (! $task instanceof Task) {
                    throw new \Exception('['.__LINE__.']['.class_basename($this).']');
                }

                $parameters = $task->compileParameters(true);
                if (!is_array($parameters)) {
                    $parameters = [];
                }

                $event = $schedule->command($task->command, $parameters);

                $event->{$task->expression}()
                    ->name($task->description)
                    ->timezone($task->timezone)
                    ->before(function () use ($task) {
                        Executing::dispatch($task);
                    })
                    ->thenWithOutput(function ($output) use ($event, $task) {
                        Executed::dispatch($task, $event->start ?? microtime(true), $output);
                    });

                if ($task->dont_overlap) {
                    $event->withoutOverlapping();
                }
                if ($task->run_in_maintenance) {
                    $event->evenInMaintenanceMode();
                }
                if ($task->run_on_one_server && in_array(config('cache.default'), ['memcached', 'redis', 'database', 'dynamodb'])) {
                    $event->onOneServer();
                }
                if ($task->run_in_background) {
                    $event->runInBackground();
                }
            });
=======
        if ($job instanceof Task) {
            event(new Executing($job));
>>>>>>> 10aecc0 (.)
        }
>>>>>>> origin/dev
    }
<<<<<<< HEAD
>>>>>>> 8862046 (.)
=======

    /**
     * Gestisce la fine dell'esecuzione di un job
     */
    protected function jobFinished(Job $job, bool $failed = false, ?Throwable $exception = null): void
    {
        if ($job instanceof Task) {
            $start = microtime(true);
            $output = $exception ? $exception->getMessage() : '';
            event(new Executed($job, $start, $output));
        }
    }

    /**
     * Registra i task schedulati
     */
    public function registerSchedule(Schedule $schedule): void 
    {
        if (!Schema::hasTable('tasks')) {
            return;
        }

        $tasks = app(Task::class)
            ->query()
            ->with('frequencies')
            ->where('is_active', true)
            ->get();

        $tasks->each(function ($task) use ($schedule): void {
            if (!$task instanceof Task) {
                return;
            }

            $event = $schedule->command($task->command, $task->parameters ?? []);
            
            foreach ($task->frequencies as $frequency) {
                $event->{$frequency->interval}();
            }
        });
    }
>>>>>>> 10aecc0 (.)
}
