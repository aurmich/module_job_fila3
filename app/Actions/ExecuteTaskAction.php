<?php

declare(strict_types=1);

namespace Modules\Job\Actions;

use Illuminate\Support\Facades\Artisan;
use Modules\Job\Events\Executed;
use Modules\Job\Events\Executing;
use Modules\Job\Models\Task;
use Webmozart\Assert\Assert;

class ExecuteTaskAction
{
    /**
     * Esegue un task in base al suo ID.
     *
     * @param string $taskId L'ID del task da eseguire
     * @return void
     */
    public function execute(string $taskId): void
    {
        // Verifica che l'ID del task sia valido
        Assert::stringNotEmpty($taskId, 'L\'ID del task non può essere vuoto.');

        // Recupera il task dal database
        $task = Task::find($taskId);

        // Verifica che il task esista
        Assert::notNull($task, sprintf('Nessun task trovato con ID "%s".', $taskId));

        // Evento prima dell'esecuzione
        event(new Executing($task));

        // Esecuzione del task
        $start = microtime(true);
        $output = '';

        try {
            if ($task->isCommandTask()) {
                // Se è un comando Artisan, lo eseguiamo con i parametri compilati
                $parameters = $task->compileParameters(true) ?? [];

                // Esecuzione del comando
                $exitCode = Artisan::call($task->command, $parameters);
                $output = Artisan::output();

                // Gestione del risultato
                if ($exitCode !== 0) {
                    report(new \Exception("Il comando '{$task->command}' è terminato con codice {$exitCode}"));
                }
            } else {
                // Se è una funzione personalizzata, la eseguiamo tramite il container
                $parameters = $task->compileParameters(false) ?? [];
                app()->call([app($task->command), 'handle'], $parameters);
            }

            // Evento dopo l'esecuzione
            event(new Executed($task, $start, $output));
        } catch (\Throwable $e) {
            report($e);
            // Si potrebbe gestire l'errore in modo più specifico qui
        }
    }
}
