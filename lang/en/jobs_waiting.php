<?php

<<<<<<< HEAD
return [
    'navigation' => [
<<<<<<< HEAD
        'name' => 'Jobs in Attesa',
        'plural' => 'Jobs in Attesa',
        'group' => [
            'name' => 'Sistema',
            'description' => 'Monitoraggio dei jobs in coda',
        ],
        'label' => 'Jobs in Attesa',
=======
=======
declare(strict_types=1);

return [
    'navigation' => [
>>>>>>> d1512fa (.)
        'name' => 'Waiting Jobs',
        'plural' => 'Waiting Jobs',
        'group' => [
            'name' => 'System',
            'description' => 'Queue job monitoring',
        ],
        'label' => 'Waiting Jobs',
<<<<<<< HEAD
>>>>>>> dd0eeda (.)
        'sort' => '15',
        'icon' => 'jobs waiting.navigation',
=======
        'sort' => 15,
        'icon' => 'jobs-waiting-navigation',
>>>>>>> d1512fa (.)
    ],
    'fields' => [
        'id' => [
            'label' => 'ID',
<<<<<<< HEAD
            'tooltip' => 'Identificativo univoco del job',
            'placeholder' => 'ID del job',
        ],
        'queue' => [
<<<<<<< HEAD
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
=======
=======
            'tooltip' => 'Unique identifier of the job',
            'placeholder' => 'Job ID',
        ],
        'queue' => [
>>>>>>> d1512fa (.)
            'label' => 'Queue',
            'tooltip' => 'Name of the job queue',
            'placeholder' => 'Select queue',
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
<<<<<<< HEAD
            'tooltip' => 'User\'s first name',
=======
            'tooltip' => "User's first name",
>>>>>>> d1512fa (.)
            'placeholder' => 'Enter first name',
        ],
        'last_name' => [
            'label' => 'Last Name',
<<<<<<< HEAD
            'tooltip' => 'User\'s last name',
            'placeholder' => 'Enter last name',
>>>>>>> dd0eeda (.)
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
=======
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
>>>>>>> d1512fa (.)
        ],
    ],
    'actions' => [
        'import' => [
<<<<<<< HEAD
            'label' => 'Importa',
            'tooltip' => 'Importa dati da un file XLS o CSV',
=======
            'label' => 'Import',
            'tooltip' => 'Import data from an XLS or CSV file',
>>>>>>> d1512fa (.)
            'icon' => 'import-icon',
            'color' => 'blue',
            'fields' => [
                'import_file' => [
<<<<<<< HEAD
                    'label' => 'Seleziona un file XLS o CSV da caricare',
                    'tooltip' => 'Seleziona un file da caricare per l\'importazione',
                    'placeholder' => 'Scegli un file',
=======
                    'label' => 'Select an XLS or CSV file to upload',
                    'tooltip' => 'Select a file to upload for import',
                    'placeholder' => 'Choose a file',
>>>>>>> d1512fa (.)
                ],
            ],
        ],
        'export' => [
<<<<<<< HEAD
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
=======
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
>>>>>>> d1512fa (.)
                ],
            ],
        ],
        'process' => [
<<<<<<< HEAD
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
=======
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
            'label' => 'Cancel',
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
>>>>>>> d1512fa (.)
            ],
        ],
    ],
    'messages' => [
<<<<<<< HEAD
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
=======
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
>>>>>>> d1512fa (.)
        'batch' => 'Batch',
    ],
];
