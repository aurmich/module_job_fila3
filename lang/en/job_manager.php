<?php

<<<<<<< HEAD
declare(strict_types=1);

return [
    'navigation' => [
        'label' => 'Job Manager',
        'group' => 'Jobs',
        'icon' => 'heroicon-o-queue-list',
        'sort' => 10,
    ],
    'fields' => [
        'job_id' => [
            'label' => 'Job ID',
            'placeholder' => 'Enter job ID',
            'help' => 'Unique identifier for the job',
        ],
        'status' => [
            'label' => 'Status',
            'placeholder' => 'Select status',
            'help' => 'Current status of the job',
        ],
        'name' => [
            'label' => 'Name',
            'tooltip' => 'Name of the Job Manager',
            'placeholder' => 'Enter name',
        ],
        'description' => [
            'label' => 'Description',
            'tooltip' => 'Brief description of the Job Manager',
            'placeholder' => 'Job Manager description',
        ],
        'type' => [
            'label' => 'Type',
            'tooltip' => 'Type of Job Manager',
            'placeholder' => 'Select type',
        ],
        'priority' => [
            'label' => 'Priority',
            'tooltip' => 'Execution priority of the Job Manager',
            'placeholder' => 'Select priority',
        ],
        'max_attempts' => [
            'label' => 'Max Attempts',
            'tooltip' => 'Maximum number of attempts to run the Job Manager',
            'placeholder' => 'Max attempts',
        ],
        'timeout' => [
            'label' => 'Timeout',
            'tooltip' => 'Maximum execution time for the Job Manager',
            'placeholder' => 'Timeout',
        ],
        'created_at' => [
            'label' => 'Created At',
            'tooltip' => 'Creation date of the Job Manager',
            'placeholder' => 'Creation date',
        ],
        'updated_at' => [
            'label' => 'Updated At',
            'tooltip' => 'Date of last update',
            'placeholder' => 'Update date',
        ],
        'last_run' => [
            'label' => 'Last Run',
            'tooltip' => 'Date and time of last execution',
            'placeholder' => 'Last run',
        ],
        'next_run' => [
            'label' => 'Next Run',
            'tooltip' => 'Date and time of next execution',
            'placeholder' => 'Next run',
        ],
        'cron_expression' => [
            'label' => 'Cron Expression',
            'tooltip' => 'Cron expression for job scheduling',
            'placeholder' => 'Enter cron expression',
        ],
        'output' => [
            'label' => 'Output',
            'tooltip' => 'Job execution output',
            'placeholder' => 'Output',
        ],
        'error' => [
            'label' => 'Error',
            'tooltip' => 'Error message if the job fails',
            'placeholder' => 'Error',
        ],
        'guard_name' => [
            'label' => 'Guard',
            'tooltip' => 'Guard associated with the Job Manager',
            'placeholder' => 'Select Guard',
        ],
        'permissions' => [
            'label' => 'Permissions',
            'tooltip' => 'Permissions associated with the Job Manager',
            'placeholder' => 'Select permissions',
        ],
        'first_name' => [
            'label' => 'First Name',
            'tooltip' => 'First name of the associated user',
            'placeholder' => 'Enter first name',
        ],
        'last_name' => [
            'label' => 'Last Name',
            'tooltip' => 'Last name of the associated user',
            'placeholder' => 'Enter last name',
        ],
        'toggleColumns' => [
            'label' => 'Toggle Columns',
            'tooltip' => 'Show or hide table columns',
            'placeholder' => '',
        ],
        'reorderRecords' => [
            'label' => 'Reorder Records',
            'tooltip' => 'Change the order of records',
            'placeholder' => '',
        ],
        'resetFilters' => [
            'label' => 'Reset Filters',
            'tooltip' => 'Reset all filters',
            'placeholder' => '',
        ],
        'applyFilters' => [
            'label' => 'Apply Filters',
            'tooltip' => 'Apply selected filters',
            'placeholder' => '',
=======
return [
    'navigation' => [
        'name' => 'Gestione Jobs',
        'plural' => 'Gestione Jobs',
        'group' => [
            'name' => 'Sistema',
            'description' => 'Gestione centralizzata di tutti i jobs',
        ],
        'label' => 'Job Manager',
        'sort' => '1',
        'icon' => 'job-manager-animated',
    ],
    'fields' => [
        'id' => [
            'label' => 'ID',
            'tooltip' => 'Identificativo unico del Job Manager',
            'placeholder' => 'ID del Manager',
        ],
        'name' => [
            'label' => 'Nome',
            'tooltip' => 'Nome del Job Manager',
            'placeholder' => 'Inserisci nome',
        ],
        'description' => [
            'label' => 'Descrizione',
            'tooltip' => 'Breve descrizione del job manager',
            'placeholder' => 'Descrizione del Job Manager',
        ],
        'status' => [
            'label' => 'Stato',
            'tooltip' => 'Stato corrente del Job Manager',
            'placeholder' => 'Seleziona stato',
        ],
        'type' => [
            'label' => 'Tipo',
            'tooltip' => 'Tipo di Job Manager',
            'placeholder' => 'Seleziona tipo',
        ],
        'priority' => [
            'label' => 'Priorità',
            'tooltip' => 'Priorità di esecuzione del job manager',
            'placeholder' => 'Seleziona priorità',
        ],
        'max_attempts' => [
            'label' => 'Tentativi Massimi',
            'tooltip' => 'Numero massimo di tentativi per eseguire il job manager',
            'placeholder' => 'Tentativi massimi',
        ],
        'timeout' => [
            'label' => 'Timeout',
            'tooltip' => 'Tempo massimo per l\'esecuzione del job manager',
            'placeholder' => 'Timeout',
        ],
        'created_at' => [
            'label' => 'Creato il',
            'tooltip' => 'Data di creazione del Job Manager',
            'placeholder' => 'Data di creazione',
        ],
        'updated_at' => [
            'label' => 'Aggiornato il',
            'tooltip' => 'Data dell\'ultimo aggiornamento',
            'placeholder' => 'Data aggiornamento',
        ],
        'last_run' => [
            'label' => 'Ultima Esecuzione',
            'tooltip' => 'Data e ora dell\'ultima esecuzione',
            'placeholder' => 'Ultima esecuzione',
        ],
        'next_run' => [
            'label' => 'Prossima Esecuzione',
            'tooltip' => 'Data e ora della prossima esecuzione',
            'placeholder' => 'Prossima esecuzione',
        ],
        'cron_expression' => [
            'label' => 'Espressione Cron',
            'tooltip' => 'Espressione cron per la pianificazione del job',
            'placeholder' => 'Inserisci espressione cron',
        ],
        'output' => [
            'label' => 'Output',
            'tooltip' => 'Output dell\'esecuzione del job',
            'placeholder' => 'Output',
        ],
        'error' => [
            'label' => 'Errore',
            'tooltip' => 'Messaggio di errore se il job fallisce',
            'placeholder' => 'Errore',
        ],
        'guard_name' => [
            'label' => 'Guard',
            'tooltip' => 'Guard a cui è associato il Job Manager',
            'placeholder' => 'Seleziona Guard',
        ],
        'permissions' => [
            'label' => 'Permessi',
            'tooltip' => 'Permessi associati al Job Manager',
            'placeholder' => 'Seleziona permessi',
        ],
        'first_name' => [
            'label' => 'Nome',
            'tooltip' => 'Nome dell\'utente associato',
            'placeholder' => 'Inserisci nome',
        ],
        'last_name' => [
            'label' => 'Cognome',
            'tooltip' => 'Cognome dell\'utente associato',
            'placeholder' => 'Inserisci cognome',
        ],
        'toggleColumns' => [
            'label' => 'toggleColumns',
        ],
        'reorderRecords' => [
            'label' => 'reorderRecords',
        ],
        'resetFilters' => [
            'label' => 'resetFilters',
        ],
        'applyFilters' => [
            'label' => 'applyFilters',
>>>>>>> 92584ee (.)
        ],
    ],
    'actions' => [
        'import' => [
<<<<<<< HEAD
            'label' => 'Import',
            'modal' => [
                'heading' => 'Import Job Manager',
                'description' => 'Select an XLS or CSV file to import the Job Manager',
            ],
            'messages' => [
                'success' => 'Job Manager import started successfully',
=======
            'label' => 'Importa',
            'modal' => [
                'heading' => 'Importa Job Manager',
                'description' => 'Seleziona un file XLS o CSV da caricare per importare il Job Manager',
            ],
            'messages' => [
                'success' => 'Importazione del Job Manager avviata con successo',
>>>>>>> 92584ee (.)
            ],
            'icon' => 'upload',
            'color' => 'primary',
        ],
        'export' => [
<<<<<<< HEAD
            'label' => 'Export',
            'modal' => [
                'heading' => 'Export Job Manager',
                'description' => 'Export Job Manager data to a file',
            ],
            'messages' => [
                'success' => 'Job Manager exported successfully',
=======
            'label' => 'Esporta',
            'modal' => [
                'heading' => 'Esporta Job Manager',
                'description' => 'Esporta i dati del Job Manager in un file',
            ],
            'messages' => [
                'success' => 'Job Manager esportato con successo',
>>>>>>> 92584ee (.)
            ],
            'icon' => 'download',
            'color' => 'success',
        ],
        'run' => [
<<<<<<< HEAD
            'label' => 'Run Job',
            'modal' => [
                'heading' => 'Run Job Manager',
                'description' => 'Do you want to run this Job Manager?',
            ],
            'messages' => [
                'success' => 'Job Manager started successfully',
=======
            'label' => 'Esegui',
            'modal' => [
                'heading' => 'Esegui Job Manager',
                'description' => 'Vuoi eseguire questo Job Manager?',
            ],
            'messages' => [
                'success' => 'Job Manager avviato con successo',
>>>>>>> 92584ee (.)
            ],
            'icon' => 'play',
            'color' => 'primary',
        ],
        'pause' => [
<<<<<<< HEAD
            'label' => 'Pause',
            'modal' => [
                'heading' => 'Pause Job Manager',
                'description' => 'Do you want to pause this Job Manager?',
            ],
            'messages' => [
                'success' => 'Job Manager paused successfully',
=======
            'label' => 'Pausa',
            'modal' => [
                'heading' => 'Metti in Pausa',
                'description' => 'Vuoi mettere in pausa questo Job Manager?',
            ],
            'messages' => [
                'success' => 'Job Manager messo in pausa con successo',
>>>>>>> 92584ee (.)
            ],
            'icon' => 'pause',
            'color' => 'warning',
        ],
        'resume' => [
<<<<<<< HEAD
            'label' => 'Resume',
            'modal' => [
                'heading' => 'Resume Execution',
                'description' => 'Do you want to resume this Job Manager?',
            ],
            'messages' => [
                'success' => 'Job Manager resumed successfully',
=======
            'label' => 'Riprendi',
            'modal' => [
                'heading' => 'Riprendi Esecuzione',
                'description' => 'Vuoi riprendere l\'esecuzione di questo Job Manager?',
            ],
            'messages' => [
                'success' => 'Job Manager ripreso con successo',
>>>>>>> 92584ee (.)
            ],
            'icon' => 'redo',
            'color' => 'success',
        ],
        'delete' => [
<<<<<<< HEAD
            'label' => 'Delete Job',
            'modal' => [
                'heading' => 'Delete Job Manager',
                'description' => 'Are you sure you want to delete this Job Manager?',
            ],
            'messages' => [
                'success' => 'Job Manager deleted successfully',
=======
            'label' => 'Elimina',
            'modal' => [
                'heading' => 'Elimina Job Manager',
                'description' => 'Sei sicuro di voler eliminare questo Job Manager?',
            ],
            'messages' => [
                'success' => 'Job Manager eliminato con successo',
>>>>>>> 92584ee (.)
            ],
            'icon' => 'trash',
            'color' => 'danger',
        ],
    ],
    'messages' => [
<<<<<<< HEAD
        'no_jobs' => 'No Job Manager found',
        'manager_started' => 'Job Manager started',
        'manager_paused' => 'Job Manager paused',
        'manager_resumed' => 'Job Manager resumed',
        'manager_completed' => 'Job Manager completed',
        'manager_failed' => 'Job Manager failed',
    ],
    'statuses' => [
        'active' => 'Active',
        'paused' => 'Paused',
        'completed' => 'Completed',
        'failed' => 'Failed',
    ],
    'types' => [
        'scheduler' => 'Scheduler',
        'queue' => 'Queue',
=======
        'no_jobs' => 'Nessun Job Manager presente',
        'manager_started' => 'Job Manager avviato',
        'manager_paused' => 'Job Manager in pausa',
        'manager_resumed' => 'Job Manager ripreso',
        'manager_completed' => 'Job Manager completato',
        'manager_failed' => 'Job Manager fallito',
    ],
    'statuses' => [
        'active' => 'Attivo',
        'paused' => 'In Pausa',
        'completed' => 'Completato',
        'failed' => 'Fallito',
    ],
    'types' => [
        'scheduler' => 'Schedulatore',
        'queue' => 'Coda',
>>>>>>> 92584ee (.)
        'worker' => 'Worker',
        'monitor' => 'Monitor',
    ],
    'priorities' => [
<<<<<<< HEAD
        'low' => 'Low',
        'normal' => 'Normal',
        'high' => 'High',
        'urgent' => 'Urgent',
    ],
    'validation' => [
        'job_id_required' => 'Job ID is required.',
        'status_required' => 'Status is required.',
        'name_required' => 'Name is required.',
        'type_required' => 'Type is required.',
        'priority_required' => 'Priority is required.',
        'max_attempts_numeric' => 'Max Attempts must be a number.',
        'timeout_numeric' => 'Timeout must be a number.',
=======
        'low' => 'Bassa',
        'normal' => 'Normale',
        'high' => 'Alta',
        'urgent' => 'Urgente',
>>>>>>> 92584ee (.)
    ],
];
