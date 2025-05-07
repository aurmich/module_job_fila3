<?php

declare(strict_types=1);

namespace Modules\Job\Http\Livewire\Schedule;

use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Artisan;
use Livewire\Component;
use Modules\Job\Actions\ExecuteTaskAction;
use Modules\Job\Models\Task;
use Modules\Xot\Actions\GetViewAction;
use Symfony\Component\Console\Command\Command;

/**
<<<<<<< HEAD
<<<<<<< HEAD
 * Class Schedule\Crud.
=======
<<<<<<< HEAD
 * Class Crud
 * 
 * Gestisce le operazioni CRUD per i task schedulati
=======
 * Class Schedule\Crud.
>>>>>>> origin/dev
>>>>>>> 8862046 (.)
=======
 * Class Crud
 * 
 * Gestisce le operazioni CRUD per i task schedulati
>>>>>>> 10aecc0 (.)
 */
class Crud extends Component
{
    public bool $create = false;

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Return available frequencies.
=======
<<<<<<< HEAD
     * Restituisce le frequenze disponibili per la schedulazione
     *
     * @throws Exception Se la configurazione non è valida
=======
     * Return available frequencies.
>>>>>>> origin/dev
>>>>>>> 8862046 (.)
=======
     * Restituisce le frequenze disponibili per la schedulazione
     *
     * @throws Exception Se la configurazione non è valida
>>>>>>> 10aecc0 (.)
     */
    public static function getFrequencies(): array
    {
        $res = config('totem.frequencies');
        if (is_array($res)) {
            return $res;
        }

<<<<<<< HEAD
<<<<<<< HEAD
        throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
    }

=======
<<<<<<< HEAD
        throw new Exception('Configurazione frequenze non valida');
    }

    /**
     * Renderizza il componente
     */
=======
        throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
    }

>>>>>>> origin/dev
>>>>>>> 8862046 (.)
=======
        throw new Exception('Configurazione frequenze non valida');
    }

    /**
     * Renderizza il componente
     */
>>>>>>> 10aecc0 (.)
    public function render(): Renderable
    {
        $view = app(GetViewAction::class)->execute();
        $tasks = Task::paginate(20);
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
        
        return view($view, [
            'tasks' => $tasks,
        ]);
    }

    /**
     * Apre il modale per la creazione di un nuovo task
     */
=======
>>>>>>> 8862046 (.)
        $view_params = [
=======
        
        return view($view, [
>>>>>>> 10aecc0 (.)
            'tasks' => $tasks,
        ]);
    }

<<<<<<< HEAD
=======
>>>>>>> origin/dev
>>>>>>> 8862046 (.)
    public function taskCreate(): void
    {
        $this->dispatch('modal.open', 'modal.schedule.create');
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
     * Restituisce la collezione dei comandi Artisan disponibili
     */
    public function getCommands(): Collection
    {
        $all_commands = collect(Artisan::all());

=======
>>>>>>> 8862046 (.)
     * Return collection of Artisan commands filtered if needed.
=======
     * Restituisce la collezione dei comandi Artisan disponibili
>>>>>>> 10aecc0 (.)
     */
    public function getCommands(): Collection
    {
        $all_commands = collect(Artisan::all());

<<<<<<< HEAD
        /*
        if (! empty($command_filter)) {
            // $all_commands = $all_commands->filter(function (Command $command) use ($command_filter, $whitelist) {
            $all_commands = $all_commands->filter(
                function ($command) use ($command_filter, $whitelist) {
                    foreach ($command_filter as $filter) {
                        if (fnmatch($filter, $command->getName())) {
                            return $whitelist;
<<<<<<< HEAD
                        }U/Notifications/VerifyEmail.php
=======
                        }
>>>>>>> 8862046 (.)
                    }

                    return ! $whitelist;
                }
            );
        }
        */

<<<<<<< HEAD
        return $all_commands->sortBy(
            static function (Command $command): string {
                $name = $command->getName();
=======
>>>>>>> origin/dev
=======
>>>>>>> 10aecc0 (.)
        return $all_commands->sortBy(
            static function (Command $command): string {
                $name = $command->getName();
                if ($name === null) {
                    return '';
                }
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> origin/dev
>>>>>>> 8862046 (.)
=======

>>>>>>> 10aecc0 (.)
                if (mb_strpos($name, ':') === false) {
                    return ':'.$name;
                }

                return $name;
            }
        );
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
    /**
     * Esegue un task specifico
     */
=======
>>>>>>> origin/dev
>>>>>>> 8862046 (.)
=======
    /**
     * Esegue un task specifico
     */
>>>>>>> 10aecc0 (.)
    public function executeTask(string $task_id): void
    {
        app(ExecuteTaskAction::class)->execute($task_id);

<<<<<<< HEAD
<<<<<<< HEAD
        session()->flash('message', 'task ['.$task_id.'] executed at '.now());
=======
<<<<<<< HEAD
=======
>>>>>>> 10aecc0 (.)
        session()->flash('message', sprintf(
            'Task [%s] eseguito alle %s',
            $task_id,
            now()->format('Y-m-d H:i:s')
        ));
<<<<<<< HEAD
=======
        session()->flash('message', 'task ['.$task_id.'] executed at '.now());
>>>>>>> origin/dev
>>>>>>> 8862046 (.)
=======
>>>>>>> 10aecc0 (.)
    }
}
