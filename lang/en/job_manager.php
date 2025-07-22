<?php

<<<<<<< HEAD
return [
    'navigation' => [
<<<<<<< HEAD
        'name' => 'Gestione Jobs',
        'plural' => 'Gestione Jobs',
        'group' => [
            'name' => 'Sistema',
            'description' => 'Gestione centralizzata di tutti i jobs',
=======
=======
declare(strict_types=1);

return [
    'navigation' => [
>>>>>>> d1512fa (.)
        'name' => 'Job Management',
        'plural' => 'Job Management',
        'group' => [
            'name' => 'System',
            'description' => 'Centralized management of all jobs',
<<<<<<< HEAD
>>>>>>> dd0eeda (.)
        ],
        'label' => 'Job Manager',
        'sort' => '1',
=======
        ],
        'label' => 'Job Manager',
        'sort' => 1,
>>>>>>> d1512fa (.)
        'icon' => 'job-manager-animated',
    ],
    'fields' => [
        'id' => [
            'label' => 'ID',
<<<<<<< HEAD
            'tooltip' => 'Identificativo unico del Job Manager',
            'placeholder' => 'ID del Manager',
        ],
        'name' => [
<<<<<<< HEAD
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
=======
=======
            'tooltip' => 'Unique identifier of the Job Manager',
            'placeholder' => 'Manager ID',
        ],
        'name' => [
>>>>>>> d1512fa (.)
            'label' => 'Name',
            'tooltip' => 'Name of the Job Manager',
            'placeholder' => 'Enter name',
        ],
        'description' => [
            'label' => 'Description',
<<<<<<< HEAD
            'tooltip' => 'Brief description of the job manager',
=======
            'tooltip' => 'Brief description of the Job Manager',
>>>>>>> d1512fa (.)
            'placeholder' => 'Job Manager description',
        ],
        'status' => [
            'label' => 'Status',
            'tooltip' => 'Current status of the Job Manager',
            'placeholder' => 'Select status',
        ],
        'type' => [
            'label' => 'Type',
            'tooltip' => 'Type of Job Manager',
            'placeholder' => 'Select type',
        ],
        'priority' => [
            'label' => 'Priority',
<<<<<<< HEAD
            'tooltip' => 'Execution priority of the job manager',
=======
            'tooltip' => 'Execution priority of the Job Manager',
>>>>>>> d1512fa (.)
            'placeholder' => 'Select priority',
        ],
        'max_attempts' => [
            'label' => 'Max Attempts',
<<<<<<< HEAD
            'tooltip' => 'Maximum number of attempts to run the job manager',
=======
            'tooltip' => 'Maximum number of attempts to run the Job Manager',
>>>>>>> d1512fa (.)
            'placeholder' => 'Max attempts',
        ],
        'timeout' => [
            'label' => 'Timeout',
<<<<<<< HEAD
            'tooltip' => 'Maximum execution time for the job manager',
=======
            'tooltip' => 'Maximum execution time for the Job Manager',
>>>>>>> d1512fa (.)
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
<<<<<<< HEAD
>>>>>>> dd0eeda (.)
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
=======
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
>>>>>>> d1512fa (.)
        ],
    ],
    'actions' => [
        'import' => [
<<<<<<< HEAD
            'label' => 'Importa',
            'modal' => [
                'heading' => 'Importa Job Manager',
                'description' => 'Seleziona un file XLS o CSV da caricare per importare il Job Manager',
            ],
            'messages' => [
                'success' => 'Importazione del Job Manager avviata con successo',
=======
            'label' => 'Import',
            'modal' => [
                'heading' => 'Import Job Manager',
                'description' => 'Select an XLS or CSV file to import the Job Manager',
            ],
            'messages' => [
                'success' => 'Job Manager import started successfully',
>>>>>>> d1512fa (.)
            ],
            'icon' => 'upload',
            'color' => 'primary',
        ],
        'export' => [
<<<<<<< HEAD
            'label' => 'Esporta',
            'modal' => [
                'heading' => 'Esporta Job Manager',
                'description' => 'Esporta i dati del Job Manager in un file',
            ],
            'messages' => [
                'success' => 'Job Manager esportato con successo',
=======
            'label' => 'Export',
            'modal' => [
                'heading' => 'Export Job Manager',
                'description' => 'Export Job Manager data to a file',
            ],
            'messages' => [
                'success' => 'Job Manager exported successfully',
>>>>>>> d1512fa (.)
            ],
            'icon' => 'download',
            'color' => 'success',
        ],
        'run' => [
<<<<<<< HEAD
            'label' => 'Esegui',
            'modal' => [
                'heading' => 'Esegui Job Manager',
                'description' => 'Vuoi eseguire questo Job Manager?',
            ],
            'messages' => [
                'success' => 'Job Manager avviato con successo',
=======
            'label' => 'Run',
            'modal' => [
                'heading' => 'Run Job Manager',
                'description' => 'Do you want to run this Job Manager?',
            ],
            'messages' => [
                'success' => 'Job Manager started successfully',
>>>>>>> d1512fa (.)
            ],
            'icon' => 'play',
            'color' => 'primary',
        ],
        'pause' => [
<<<<<<< HEAD
            'label' => 'Pausa',
            'modal' => [
                'heading' => 'Metti in Pausa',
                'description' => 'Vuoi mettere in pausa questo Job Manager?',
            ],
            'messages' => [
                'success' => 'Job Manager messo in pausa con successo',
=======
            'label' => 'Pause',
            'modal' => [
                'heading' => 'Pause Job Manager',
                'description' => 'Do you want to pause this Job Manager?',
            ],
            'messages' => [
                'success' => 'Job Manager paused successfully',
>>>>>>> d1512fa (.)
            ],
            'icon' => 'pause',
            'color' => 'warning',
        ],
        'resume' => [
<<<<<<< HEAD
            'label' => 'Riprendi',
            'modal' => [
                'heading' => 'Riprendi Esecuzione',
                'description' => 'Vuoi riprendere l\'esecuzione di questo Job Manager?',
            ],
            'messages' => [
                'success' => 'Job Manager ripreso con successo',
=======
            'label' => 'Resume',
            'modal' => [
                'heading' => 'Resume Execution',
                'description' => 'Do you want to resume this Job Manager?',
            ],
            'messages' => [
                'success' => 'Job Manager resumed successfully',
>>>>>>> d1512fa (.)
            ],
            'icon' => 'redo',
            'color' => 'success',
        ],
        'delete' => [
<<<<<<< HEAD
            'label' => 'Elimina',
            'modal' => [
                'heading' => 'Elimina Job Manager',
                'description' => 'Sei sicuro di voler eliminare questo Job Manager?',
            ],
            'messages' => [
                'success' => 'Job Manager eliminato con successo',
=======
            'label' => 'Delete',
            'modal' => [
                'heading' => 'Delete Job Manager',
                'description' => 'Are you sure you want to delete this Job Manager?',
            ],
            'messages' => [
                'success' => 'Job Manager deleted successfully',
>>>>>>> d1512fa (.)
            ],
            'icon' => 'trash',
            'color' => 'danger',
        ],
    ],
    'messages' => [
<<<<<<< HEAD
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
=======
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
>>>>>>> d1512fa (.)
        'worker' => 'Worker',
        'monitor' => 'Monitor',
    ],
    'priorities' => [
<<<<<<< HEAD
        'low' => 'Bassa',
        'normal' => 'Normale',
        'high' => 'Alta',
        'urgent' => 'Urgente',
=======
        'low' => 'Low',
        'normal' => 'Normal',
        'high' => 'High',
        'urgent' => 'Urgent',
>>>>>>> d1512fa (.)
    ],
];
