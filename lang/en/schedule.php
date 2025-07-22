<?php

<<<<<<< HEAD
<<<<<<< HEAD
return [
    'navigation' => [
        'name' => 'Schedulatore',
        'plural' => 'Schedulatori',
        'group' => [
            'name' => 'Jobs',
            'description' => 'Gestione dei job schedulati',
        ],
        'label' => 'Schedulatore',
=======
=======
>>>>>>> d1512fa (.)
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
<<<<<<< HEAD
>>>>>>> dd0eeda (.)
        'sort' => '55',
=======
        'sort' => 55,
>>>>>>> d1512fa (.)
        'icon' => 'job-schedule-animated',
    ],
    'resource' => [
        'single' => 'Schedule',
        'plural' => 'Schedules',
        'navigation' => 'Settings',
        'history' => 'Show run history',
    ],
    'fields' => [
        'name' => [
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> d1512fa (.)
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
<<<<<<< HEAD
>>>>>>> dd0eeda (.)
=======
>>>>>>> d1512fa (.)
            'placeholder' => 'Log filename',
        ],
        'status' => [
            'label' => 'Status',
<<<<<<< HEAD
<<<<<<< HEAD
            'tooltip' => 'Stato corrente del job',
            'placeholder' => 'Stato',
        ],
        'actions' => [
            'label' => 'Actions',
            'tooltip' => 'Azioni disponibili per il job',
=======
=======
>>>>>>> d1512fa (.)
            'tooltip' => 'Current job status',
            'placeholder' => 'Status',
        ],
        'actions' => [
            'label' => 'Actions',
            'tooltip' => 'Available actions for the job',
<<<<<<< HEAD
>>>>>>> dd0eeda (.)
=======
>>>>>>> d1512fa (.)
            'icon' => 'action-icon',
            'color' => 'blue',
        ],
        'run_in_background' => [
            'label' => 'Run in Background',
<<<<<<< HEAD
<<<<<<< HEAD
            'tooltip' => 'Esegui il job in background',
=======
            'tooltip' => 'Run the job in background',
>>>>>>> dd0eeda (.)
=======
            'tooltip' => 'Run the job in background',
>>>>>>> d1512fa (.)
            'placeholder' => 'Run in background',
        ],
        'created_at' => [
            'label' => 'Created At',
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> d1512fa (.)
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
<<<<<<< HEAD
>>>>>>> dd0eeda (.)
        ],
        'toggleColumns' => [
            'label' => 'toggleColumns',
        ],
        'reorderRecords' => [
            'label' => 'reorderRecords',
        ],
        'resetFilters' => [
            'label' => 'resetFilters',
=======
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
>>>>>>> d1512fa (.)
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
    ],
    'status' => [
        'active' => 'Active',
        'inactive' => 'Inactive',
        'trashed' => 'Trashed',
<<<<<<< HEAD
<<<<<<< HEAD
        'running' => 'In Esecuzione',
        'failed' => 'Fallito',
=======
        'running' => 'Running',
        'failed' => 'Failed',
>>>>>>> dd0eeda (.)
=======
        'running' => 'Running',
        'failed' => 'Failed',
>>>>>>> d1512fa (.)
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
<<<<<<< HEAD
            'label' => 'Esegui Ora',
            'modal' => [
                'heading' => 'Esegui Schedule',
                'description' => 'Vuoi eseguire questo schedule ora?',
            ],
            'messages' => [
                'success' => 'Schedule eseguito con successo',
=======
=======
>>>>>>> d1512fa (.)
            'label' => 'Run Now',
            'modal' => [
                'heading' => 'Run Schedule',
                'description' => 'Do you want to run this schedule now?',
            ],
            'messages' => [
                'success' => 'Schedule executed successfully',
<<<<<<< HEAD
>>>>>>> dd0eeda (.)
=======
>>>>>>> d1512fa (.)
            ],
            'icon' => 'icon-run',
            'color' => 'blue',
        ],
        'toggle' => [
<<<<<<< HEAD
<<<<<<< HEAD
            'label' => 'Attiva/Disattiva',
            'modal' => [
                'heading' => 'Modifica Stato',
                'description' => 'Vuoi modificare lo stato di questo schedule?',
            ],
            'messages' => [
                'success' => 'Stato modificato con successo',
=======
=======
>>>>>>> d1512fa (.)
            'label' => 'Activate/Deactivate',
            'modal' => [
                'heading' => 'Modify Status',
                'description' => 'Do you want to modify the status of this schedule?',
            ],
            'messages' => [
                'success' => 'Status modified successfully',
<<<<<<< HEAD
>>>>>>> dd0eeda (.)
=======
>>>>>>> d1512fa (.)
            ],
            'icon' => 'icon-toggle',
            'color' => 'orange',
        ],
        'delete' => [
<<<<<<< HEAD
<<<<<<< HEAD
            'label' => 'Elimina',
            'modal' => [
                'heading' => 'Elimina Schedule',
                'description' => 'Sei sicuro di voler eliminare questo schedule?',
            ],
            'messages' => [
                'success' => 'Schedule eliminato con successo',
=======
=======
>>>>>>> d1512fa (.)
            'label' => 'Delete',
            'modal' => [
                'heading' => 'Delete Schedule',
                'description' => 'Are you sure you want to delete this schedule?',
            ],
            'messages' => [
                'success' => 'Schedule deleted successfully',
<<<<<<< HEAD
>>>>>>> dd0eeda (.)
=======
>>>>>>> d1512fa (.)
            ],
            'icon' => 'icon-delete',
            'color' => 'red',
        ],
    ],
    'validation' => [
        'cron' => 'The field must be filled in the cron expression format.',
        'regex' => 'The :attribute field must only contain letters, numbers, dashes, and underscores. Comma is also allowed.',
    ],
    'frequencies' => [
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> d1512fa (.)
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
<<<<<<< HEAD
>>>>>>> dd0eeda (.)
=======
>>>>>>> d1512fa (.)
            ],
        ],
    ],
    'model' => [
        'label' => 'schedule.model',
    ],
];
