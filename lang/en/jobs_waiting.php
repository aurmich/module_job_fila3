<?php

<<<<<<< HEAD
declare(strict_types=1);

return [
    'navigation' => [
        'name' => 'Waiting Jobs',
        'plural' => 'Waiting Jobs',
        'group' => [
            'name' => 'System',
            'description' => 'Queue job monitoring',
        ],
        'label' => 'Waiting Jobs',
        'sort' => 15,
        'icon' => 'jobs-waiting-navigation',
    ],
    'fields' => [
        'job_id' => [
            'label' => 'Job ID',
            'placeholder' => 'Enter job ID',
            'help' => 'Unique identifier for the job',
        ],
        'queued_at' => [
            'label' => 'Queued At',
            'placeholder' => 'Select queue time',
            'help' => 'Time when the job was queued',
        ],
        'payload' => [
            'label' => 'Payload',
            'tooltip' => 'Data associated with the job',
            'placeholder' => 'Load job data',
        ],
        'attempts' => [
            'label' => 'Attempts',
            'tooltip' => 'Number of execution attempts',
            'placeholder' => 'Attempts made',
        ],
        'reserved_at' => [
            'label' => 'Reserved At',
            'tooltip' => 'Date and time when the job was reserved',
            'placeholder' => 'Select date',
        ],
        'available_at' => [
            'label' => 'Available At',
            'tooltip' => 'Date and time when the job becomes available',
            'placeholder' => 'Select date',
        ],
        'created_at' => [
            'label' => 'Created At',
            'tooltip' => 'Job creation date',
            'placeholder' => 'Creation date',
        ],
        'status' => [
            'label' => 'Status',
            'tooltip' => 'Current job status',
            'placeholder' => 'Select status',
        ],
        'priority' => [
            'label' => 'Priority',
            'tooltip' => 'Job priority',
            'placeholder' => 'Select priority',
        ],
        'type' => [
            'label' => 'Type',
            'tooltip' => 'Job type (Import, Export, etc.)',
            'placeholder' => 'Select type',
        ],
        'name' => [
            'label' => 'Name',
            'tooltip' => 'Job name',
            'placeholder' => 'Enter job name',
        ],
        'description' => [
            'label' => 'Description',
            'tooltip' => 'Job description',
            'placeholder' => 'Enter description',
        ],
        'delay' => [
            'label' => 'Delay',
            'tooltip' => 'Delay time before the job is executed',
            'placeholder' => 'Enter delay',
        ],
        'timeout' => [
            'label' => 'Timeout',
            'tooltip' => 'Maximum job execution time',
            'placeholder' => 'Enter timeout',
        ],
        'tags' => [
            'label' => 'Tags',
            'tooltip' => 'Tags associated with the job',
            'placeholder' => 'Enter tags',
        ],
        'first_name' => [
            'label' => 'First Name',
            'tooltip' => "User's first name",
            'placeholder' => 'Enter first name',
        ],
        'last_name' => [
            'label' => 'Last Name',
            'tooltip' => "User's last name",
            'placeholder' => 'Enter last name',
        ],
        'select_all' => [
            'label' => 'Select All',
            'tooltip' => 'Select all available items',
            'placeholder' => '',
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
=======
return [
    'navigation' => [
        'name' => 'Jobs in Attesa',
        'plural' => 'Jobs in Attesa',
        'group' => [
            'name' => 'Sistema',
            'description' => 'Monitoraggio dei jobs in coda',
        ],
        'label' => 'Jobs in Attesa',
        'sort' => '15',
        'icon' => 'jobs waiting.navigation',
    ],
    'fields' => [
        'id' => [
            'label' => 'ID',
            'tooltip' => 'Identificativo univoco del job',
            'placeholder' => 'ID del job',
        ],
        'queue' => [
            'label' => 'Coda',
            'tooltip' => 'Nome della coda del job',
            'placeholder' => 'Seleziona la coda',
        ],
        'payload' => [
            'label' => 'Payload',
            'tooltip' => 'Dati associati al job',
            'placeholder' => 'Carica i dati del job',
        ],
        'attempts' => [
            'label' => 'Tentativi',
            'tooltip' => 'Numero di tentativi di esecuzione',
            'placeholder' => 'Tentativi eseguiti',
        ],
        'reserved_at' => [
            'label' => 'Riservato il',
            'tooltip' => 'Data e ora in cui il job è stato riservato',
            'placeholder' => 'Seleziona la data',
        ],
        'available_at' => [
            'label' => 'Disponibile il',
            'tooltip' => 'Data e ora di disponibilità del job',
            'placeholder' => 'Seleziona la data',
        ],
        'created_at' => [
            'label' => 'Creato il',
            'tooltip' => 'Data di creazione del job',
            'placeholder' => 'Data di creazione',
        ],
        'status' => [
            'label' => 'Stato',
            'tooltip' => 'Stato attuale del job',
            'placeholder' => 'Seleziona stato',
        ],
        'priority' => [
            'label' => 'Priorità',
            'tooltip' => 'Priorità del job',
            'placeholder' => 'Seleziona priorità',
        ],
        'type' => [
            'label' => 'Tipo',
            'tooltip' => 'Tipo di job (Importazione, Esportazione, etc.)',
            'placeholder' => 'Seleziona tipo',
        ],
        'name' => [
            'label' => 'Nome',
            'tooltip' => 'Nome del job',
            'placeholder' => 'Inserisci il nome del job',
        ],
        'description' => [
            'label' => 'Descrizione',
            'tooltip' => 'Descrizione del job',
            'placeholder' => 'Inserisci la descrizione',
        ],
        'delay' => [
            'label' => 'Ritardo',
            'tooltip' => 'Tempo di ritardo prima che il job venga eseguito',
            'placeholder' => 'Inserisci il ritardo',
        ],
        'timeout' => [
            'label' => 'Timeout',
            'tooltip' => 'Tempo massimo di esecuzione del job',
            'placeholder' => 'Inserisci il timeout',
        ],
        'tags' => [
            'label' => 'Tags',
            'tooltip' => 'Etichette associate al job',
            'placeholder' => 'Inserisci i tags',
        ],
        'first_name' => [
            'label' => 'Nome',
            'tooltip' => 'Nome dell\'utente',
            'placeholder' => 'Inserisci il nome',
        ],
        'last_name' => [
            'label' => 'Cognome',
            'tooltip' => 'Cognome dell\'utente',
            'placeholder' => 'Inserisci il cognome',
        ],
        'select_all' => [
            'label' => 'Seleziona Tutti',
            'tooltip' => 'Seleziona tutti gli elementi disponibili',
            'placeholder' => '',
        ],
        'toggleColumns' => [
            'label' => 'toggleColumns',
        ],
        'reorderRecords' => [
            'label' => 'reorderRecords',
>>>>>>> 92584ee (.)
        ],
    ],
    'actions' => [
        'import' => [
<<<<<<< HEAD
            'label' => 'Import',
            'tooltip' => 'Import data from an XLS or CSV file',
=======
            'label' => 'Importa',
            'tooltip' => 'Importa dati da un file XLS o CSV',
>>>>>>> 92584ee (.)
            'icon' => 'import-icon',
            'color' => 'blue',
            'fields' => [
                'import_file' => [
<<<<<<< HEAD
                    'label' => 'Select an XLS or CSV file to upload',
                    'tooltip' => 'Select a file to upload for import',
                    'placeholder' => 'Choose a file',
=======
                    'label' => 'Seleziona un file XLS o CSV da caricare',
                    'tooltip' => 'Seleziona un file da caricare per l\'importazione',
                    'placeholder' => 'Scegli un file',
>>>>>>> 92584ee (.)
                ],
            ],
        ],
        'export' => [
<<<<<<< HEAD
            'label' => 'Export',
            'tooltip' => 'Export data to a file',
            'icon' => 'export-icon',
            'color' => 'green',
            'filename_prefix' => 'Areas as of',
            'columns' => [
                'name' => [
                    'label' => 'Area name',
                    'tooltip' => 'Name of the area to export',
                ],
                'parent_name' => [
                    'label' => 'Parent area name',
                    'tooltip' => 'Name of the parent area',
=======
            'label' => 'Esporta',
            'tooltip' => 'Esporta i dati in un file',
            'icon' => 'export-icon',
            'color' => 'green',
            'filename_prefix' => 'Aree al',
            'columns' => [
                'name' => [
                    'label' => 'Nome area',
                    'tooltip' => 'Nome dell\'area da esportare',
                ],
                'parent_name' => [
                    'label' => 'Nome area livello superiore',
                    'tooltip' => 'Nome dell\'area di livello superiore',
>>>>>>> 92584ee (.)
                ],
            ],
        ],
        'process' => [
<<<<<<< HEAD
            'label' => 'Process',
            'tooltip' => 'Process the waiting job',
            'icon' => 'play-circle',
            'color' => 'green',
            'modal' => [
                'heading' => 'Process Job',
                'description' => 'Do you want to process this waiting job?',
            ],
            'messages' => [
                'success' => 'Job processed successfully',
            ],
        ],
        'cancel' => [
            'label' => 'Cancel Job',
            'tooltip' => 'Cancel the waiting job',
            'icon' => 'delete-icon',
            'color' => 'red',
            'modal' => [
                'heading' => 'Cancel Job',
                'description' => 'Do you want to cancel this waiting job?',
            ],
            'messages' => [
                'success' => 'Job cancelled successfully',
            ],
        ],
        'retry' => [
            'label' => 'Retry',
            'tooltip' => 'Retry the failed job',
            'icon' => 'redo',
            'color' => 'yellow',
            'modal' => [
                'heading' => 'Retry Job',
                'description' => 'Do you want to retry this job?',
            ],
            'messages' => [
                'success' => 'Job retried successfully',
=======
            'label' => 'Processa',
            'tooltip' => 'Processa il job in attesa',
            'icon' => 'play-circle',
            'color' => 'green',
            'modal' => [
                'heading' => 'Processa Job',
                'description' => 'Vuoi processare questo job in attesa?',
            ],
            'messages' => [
                'success' => 'Job processato con successo',
            ],
        ],
        'cancel' => [
            'label' => 'Cancella',
            'tooltip' => 'Cancella il job in attesa',
            'icon' => 'delete-icon',
            'color' => 'red',
            'modal' => [
                'heading' => 'Cancella Job',
                'description' => 'Vuoi cancellare questo job in attesa?',
            ],
            'messages' => [
                'success' => 'Job cancellato con successo',
            ],
        ],
        'retry' => [
            'label' => 'Riprova',
            'tooltip' => 'Riprova il job fallito',
            'icon' => 'redo',
            'color' => 'yellow',
            'modal' => [
                'heading' => 'Riprova Job',
                'description' => 'Vuoi riprovare questo job?',
            ],
            'messages' => [
                'success' => 'Job riprovato con successo',
>>>>>>> 92584ee (.)
            ],
        ],
    ],
    'messages' => [
<<<<<<< HEAD
        'no_jobs' => 'No waiting jobs',
        'job_processed' => 'Job processed',
        'job_cancelled' => 'Job cancelled',
        'job_retried' => 'Job retried',
    ],
    'statuses' => [
        'waiting' => 'Waiting',
        'reserved' => 'Reserved',
        'delayed' => 'Delayed',
        'ready' => 'Ready',
    ],
    'priorities' => [
        'low' => 'Low',
        'normal' => 'Normal',
        'high' => 'High',
        'urgent' => 'Urgent',
    ],
    'types' => [
        'default' => 'Default',
        'scheduled' => 'Scheduled',
        'recurring' => 'Recurring',
        'batch' => 'Batch',
    ],
    'validation' => [
        'job_id_required' => 'Job ID is required.',
        'queued_at_required' => 'Queued At is required.',
        'status_required' => 'Status is required.',
        'priority_required' => 'Priority is required.',
        'type_required' => 'Type is required.',
        'attempts_numeric' => 'Attempts must be a number.',
        'timeout_numeric' => 'Timeout must be a number.',
    ],
=======
        'no_jobs' => 'Nessun job in attesa',
        'job_processed' => 'Job processato',
        'job_cancelled' => 'Job cancellato',
        'job_retried' => 'Job riprovato',
    ],
    'statuses' => [
        'waiting' => 'In Attesa',
        'reserved' => 'Riservato',
        'delayed' => 'Ritardato',
        'ready' => 'Pronto',
    ],
    'priorities' => [
        'low' => 'Bassa',
        'normal' => 'Normale',
        'high' => 'Alta',
        'urgent' => 'Urgente',
    ],
    'types' => [
        'default' => 'Default',
        'scheduled' => 'Schedulato',
        'recurring' => 'Ricorrente',
        'batch' => 'Batch',
    ],
>>>>>>> 92584ee (.)
];
