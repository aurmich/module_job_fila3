<?php

<<<<<<< HEAD
declare(strict_types=1);

return [
    'navigation' => [
        'name' => 'Scheduler',
        'plural' => 'Schedulers',
        'group' => [
            'name' => 'Jobs',
            'description' => 'Scheduled jobs management',
        ],
        'label' => 'Scheduler',
        'sort' => 55,
=======
return [
    'navigation' => [
        'name' => 'Schedulatore',
        'plural' => 'Schedulatori',
        'group' => [
            'name' => 'Jobs',
            'description' => 'Gestione dei job schedulati',
        ],
        'label' => 'Schedulatore',
        'sort' => '55',
>>>>>>> 92584ee (.)
        'icon' => 'job-schedule-animated',
    ],
    'resource' => [
        'single' => 'Schedule',
        'plural' => 'Schedules',
        'navigation' => 'Settings',
        'history' => 'Show run history',
    ],
    'fields' => [
<<<<<<< HEAD
        'schedule_id' => [
            'label' => 'Schedule ID',
            'placeholder' => 'Enter schedule ID',
            'help' => 'Unique identifier for the schedule',
        ],
        'cron_expression' => [
            'label' => 'Cron Expression',
            'placeholder' => 'Enter cron expression',
            'help' => 'Cron expression for the schedule',
        ],
        'name' => [
            'label' => 'Name',
            'tooltip' => 'Enter the scheduled job name',
            'placeholder' => 'Job name',
        ],
        'guard_name' => [
            'label' => 'Guard',
            'tooltip' => 'Select the guard for the job',
            'placeholder' => 'Guard name',
        ],
        'permissions' => [
            'label' => 'Permissions',
            'tooltip' => 'Assign necessary permissions to the job',
            'placeholder' => 'Permissions',
        ],
        'first_name' => [
            'label' => 'First Name',
            'tooltip' => 'Responsible person first name',
            'placeholder' => 'Responsible first name',
        ],
        'last_name' => [
            'label' => 'Last Name',
            'tooltip' => 'Responsible person last name',
            'placeholder' => 'Responsible last name',
        ],
        'command' => [
            'label' => 'Command',
            'tooltip' => 'Enter the command to execute',
            'placeholder' => 'Command',
        ],
        'arguments' => [
            'label' => 'Arguments',
            'tooltip' => 'Specify any arguments for the command',
            'placeholder' => 'Arguments',
        ],
        'options' => [
            'label' => 'Options',
            'tooltip' => 'Enter any options for the command',
            'placeholder' => 'Options',
        ],
        'expression' => [
            'label' => 'Cron Expression',
            'tooltip' => 'Set the cron expression for scheduling',
            'placeholder' => 'Cron Expression',
        ],
        'log_filename' => [
            'label' => 'Log Filename',
            'tooltip' => 'Log file name',
=======
        'name' => [
            'label' => 'Nome',
            'tooltip' => 'Inserisci il nome del job programmato',
            'placeholder' => 'Nome del job',
        ],
        'guard_name' => [
            'label' => 'Guard',
            'tooltip' => 'Seleziona il guardiano per il job',
            'placeholder' => 'Nome del guardiano',
        ],
        'permissions' => [
            'label' => 'Permessi',
            'tooltip' => 'Assegna i permessi necessari al job',
            'placeholder' => 'Permessi',
        ],
        'first_name' => [
            'label' => 'Nome',
            'tooltip' => 'Nome del responsabile',
            'placeholder' => 'Nome responsabile',
        ],
        'last_name' => [
            'label' => 'Cognome',
            'tooltip' => 'Cognome del responsabile',
            'placeholder' => 'Cognome responsabile',
        ],
        'command' => [
            'label' => 'Command',
            'tooltip' => 'Inserisci il comando da eseguire',
            'placeholder' => 'Comando',
        ],
        'arguments' => [
            'label' => 'Arguments',
            'tooltip' => 'Specificare eventuali argomenti per il comando',
            'placeholder' => 'Argomenti',
        ],
        'options' => [
            'label' => 'Options',
            'tooltip' => 'Inserisci eventuali opzioni per il comando',
            'placeholder' => 'Opzioni',
        ],
        'expression' => [
            'label' => 'Cron Expression',
            'tooltip' => 'Imposta l\'espressione cron per la pianificazione',
            'placeholder' => 'Espressione Cron',
        ],
        'log_filename' => [
            'label' => 'Log Filename',
            'tooltip' => 'Nome del file di log',
>>>>>>> 92584ee (.)
            'placeholder' => 'Log filename',
        ],
        'status' => [
            'label' => 'Status',
<<<<<<< HEAD
            'tooltip' => 'Current job status',
            'placeholder' => 'Status',
        ],
        'actions' => [
            'label' => 'Actions',
            'tooltip' => 'Available actions for the job',
=======
            'tooltip' => 'Stato corrente del job',
            'placeholder' => 'Stato',
        ],
        'actions' => [
            'label' => 'Actions',
            'tooltip' => 'Azioni disponibili per il job',
>>>>>>> 92584ee (.)
            'icon' => 'action-icon',
            'color' => 'blue',
        ],
        'run_in_background' => [
            'label' => 'Run in Background',
<<<<<<< HEAD
            'tooltip' => 'Run the job in background',
=======
            'tooltip' => 'Esegui il job in background',
>>>>>>> 92584ee (.)
            'placeholder' => 'Run in background',
        ],
        'created_at' => [
            'label' => 'Created At',
<<<<<<< HEAD
            'tooltip' => 'Job creation date',
            'placeholder' => 'Creation date',
        ],
        'updated_at' => [
            'label' => 'Updated At',
            'tooltip' => 'Last update date',
            'placeholder' => 'Update date',
        ],
        'timezone' => [
            'label' => 'Timezone',
            'tooltip' => 'Set the timezone for the job',
            'placeholder' => 'Timezone',
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
=======
            'tooltip' => 'Data di creazione del job',
            'placeholder' => 'Data creazione',
        ],
        'updated_at' => [
            'label' => 'Updated At',
            'tooltip' => 'Ultima data di aggiornamento',
            'placeholder' => 'Data aggiornamento',
        ],
        'timezone' => [
            'label' => 'Fuso Orario',
            'tooltip' => 'Imposta il fuso orario per il job',
            'placeholder' => 'Fuso orario',
        ],
        'toggleColumns' => [
            'label' => 'toggleColumns',
        ],
        'reorderRecords' => [
            'label' => 'reorderRecords',
        ],
        'resetFilters' => [
            'label' => 'resetFilters',
>>>>>>> 92584ee (.)
        ],
    ],
    'messages' => [
        'no-records-found' => 'No records found.',
        'save-success' => 'Data saved successfully.',
        'save-error' => 'Error saving data.',
        'timezone' => 'All schedules will be executed in the timezone: ',
        'select' => 'Select a command',
        'custom' => 'Custom Command',
        'custom-command-here' => 'Custom Command here (e.g. `cat /proc/cpuinfo` or `artisan db:migrate`)',
<<<<<<< HEAD
        'scheduled' => 'Job scheduled',
        'executed' => 'Schedule executed',
=======
>>>>>>> 92584ee (.)
    ],
    'status' => [
        'active' => 'Active',
        'inactive' => 'Inactive',
        'trashed' => 'Trashed',
<<<<<<< HEAD
        'running' => 'Running',
        'failed' => 'Failed',
=======
        'running' => 'In Esecuzione',
        'failed' => 'Fallito',
>>>>>>> 92584ee (.)
    ],
    'buttons' => [
        'inactivate' => [
            'label' => 'Inactivate',
            'icon' => 'icon-inactivate',
            'color' => 'gray',
        ],
        'activate' => [
            'label' => 'Activate',
            'icon' => 'icon-activate',
            'color' => 'green',
        ],
        'history' => [
            'label' => 'History',
            'icon' => 'icon-history',
            'color' => 'purple',
        ],
        'run' => [
<<<<<<< HEAD
            'label' => 'Run Now',
            'modal' => [
                'heading' => 'Run Schedule',
                'description' => 'Do you want to run this schedule now?',
            ],
            'messages' => [
                'success' => 'Schedule executed successfully',
                'error' => 'Error executing schedule',
=======
            'label' => 'Esegui Ora',
            'modal' => [
                'heading' => 'Esegui Schedule',
                'description' => 'Vuoi eseguire questo schedule ora?',
            ],
            'messages' => [
                'success' => 'Schedule eseguito con successo',
>>>>>>> 92584ee (.)
            ],
            'icon' => 'icon-run',
            'color' => 'blue',
        ],
        'toggle' => [
<<<<<<< HEAD
            'label' => 'Activate/Deactivate',
            'modal' => [
                'heading' => 'Modify Status',
                'description' => 'Do you want to modify the status of this schedule?',
            ],
            'messages' => [
                'success' => 'Status modified successfully',
=======
            'label' => 'Attiva/Disattiva',
            'modal' => [
                'heading' => 'Modifica Stato',
                'description' => 'Vuoi modificare lo stato di questo schedule?',
            ],
            'messages' => [
                'success' => 'Stato modificato con successo',
>>>>>>> 92584ee (.)
            ],
            'icon' => 'icon-toggle',
            'color' => 'orange',
        ],
        'delete' => [
<<<<<<< HEAD
            'label' => 'Delete',
            'modal' => [
                'heading' => 'Delete Schedule',
                'description' => 'Are you sure you want to delete this schedule?',
            ],
            'messages' => [
                'success' => 'Schedule deleted successfully',
=======
            'label' => 'Elimina',
            'modal' => [
                'heading' => 'Elimina Schedule',
                'description' => 'Sei sicuro di voler eliminare questo schedule?',
            ],
            'messages' => [
                'success' => 'Schedule eliminato con successo',
>>>>>>> 92584ee (.)
            ],
            'icon' => 'icon-delete',
            'color' => 'red',
        ],
    ],
    'validation' => [
<<<<<<< HEAD
        'schedule_id_required' => 'Schedule ID is required.',
        'cron_expression_required' => 'Cron Expression is required.',
        'name_required' => 'Name is required.',
        'command_required' => 'Command is required.',
        'timezone_required' => 'Timezone is required.',
=======
>>>>>>> 92584ee (.)
        'cron' => 'The field must be filled in the cron expression format.',
        'regex' => 'The :attribute field must only contain letters, numbers, dashes, and underscores. Comma is also allowed.',
    ],
    'frequencies' => [
<<<<<<< HEAD
        'everyMinute' => 'Every Minute',
        'everyFiveMinutes' => 'Every 5 Minutes',
        'everyTenMinutes' => 'Every 10 Minutes',
        'everyFifteenMinutes' => 'Every 15 Minutes',
        'everyThirtyMinutes' => 'Every 30 Minutes',
        'hourly' => 'Every Hour',
        'daily' => 'Every Day',
        'weekly' => 'Every Week',
        'monthly' => 'Every Month',
        'quarterly' => 'Every Quarter',
        'yearly' => 'Every Year',
    ],
    'days' => [
        'sunday' => 'Sunday',
        'monday' => 'Monday',
        'tuesday' => 'Tuesday',
        'wednesday' => 'Wednesday',
        'thursday' => 'Thursday',
        'friday' => 'Friday',
        'saturday' => 'Saturday',
    ],
    'cron' => [
        'help' => [
            'title' => 'Cron Expressions Help',
            'minute' => 'Minute (0-59)',
            'hour' => 'Hour (0-23)',
            'day_of_month' => 'Day of Month (1-31)',
            'month' => 'Month (1-12)',
            'day_of_week' => 'Day of Week (0-6)',
            'examples' => [
                'every_minute' => '* * * * * - Every minute',
                'every_hour' => '0 * * * * - Every hour',
                'every_day' => '0 0 * * * - Every day at midnight',
                'every_monday' => '0 0 * * 1 - Every Monday at midnight',
=======
        'everyMinute' => 'Ogni Minuto',
        'everyFiveMinutes' => 'Ogni 5 Minuti',
        'everyTenMinutes' => 'Ogni 10 Minuti',
        'everyFifteenMinutes' => 'Ogni 15 Minuti',
        'everyThirtyMinutes' => 'Ogni 30 Minuti',
        'hourly' => 'Ogni Ora',
        'daily' => 'Ogni Giorno',
        'weekly' => 'Ogni Settimana',
        'monthly' => 'Ogni Mese',
        'quarterly' => 'Ogni Trimestre',
        'yearly' => 'Ogni Anno',
    ],
    'days' => [
        'sunday' => 'Domenica',
        'monday' => 'Lunedì',
        'tuesday' => 'Martedì',
        'wednesday' => 'Mercoledì',
        'thursday' => 'Giovedì',
        'friday' => 'Venerdì',
        'saturday' => 'Sabato',
    ],
    'cron' => [
        'help' => [
            'title' => 'Aiuto Espressioni Cron',
            'minute' => 'Minuto (0-59)',
            'hour' => 'Ora (0-23)',
            'day_of_month' => 'Giorno del Mese (1-31)',
            'month' => 'Mese (1-12)',
            'day_of_week' => 'Giorno della Settimana (0-6)',
            'examples' => [
                'every_minute' => '* * * * * - Ogni minuto',
                'every_hour' => '0 * * * * - Ogni ora',
                'every_day' => '0 0 * * * - Ogni giorno a mezzanotte',
                'every_monday' => '0 0 * * 1 - Ogni lunedì a mezzanotte',
>>>>>>> 92584ee (.)
            ],
        ],
    ],
    'model' => [
        'label' => 'schedule.model',
    ],
];
