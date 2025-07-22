<?php

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
        ],
    ],
    'actions' => [
        'import' => [
            'label' => 'Import',
            'modal' => [
                'heading' => 'Import Job Manager',
                'description' => 'Select an XLS or CSV file to import the Job Manager',
            ],
            'messages' => [
                'success' => 'Job Manager import started successfully',
            ],
            'icon' => 'upload',
            'color' => 'primary',
        ],
        'export' => [
            'label' => 'Export',
            'modal' => [
                'heading' => 'Export Job Manager',
                'description' => 'Export Job Manager data to a file',
            ],
            'messages' => [
                'success' => 'Job Manager exported successfully',
            ],
            'icon' => 'download',
            'color' => 'success',
        ],
        'run' => [
            'label' => 'Run Job',
            'modal' => [
                'heading' => 'Run Job Manager',
                'description' => 'Do you want to run this Job Manager?',
            ],
            'messages' => [
                'success' => 'Job Manager started successfully',
            ],
            'icon' => 'play',
            'color' => 'primary',
        ],
        'pause' => [
            'label' => 'Pause',
            'modal' => [
                'heading' => 'Pause Job Manager',
                'description' => 'Do you want to pause this Job Manager?',
            ],
            'messages' => [
                'success' => 'Job Manager paused successfully',
            ],
            'icon' => 'pause',
            'color' => 'warning',
        ],
        'resume' => [
            'label' => 'Resume',
            'modal' => [
                'heading' => 'Resume Execution',
                'description' => 'Do you want to resume this Job Manager?',
            ],
            'messages' => [
                'success' => 'Job Manager resumed successfully',
            ],
            'icon' => 'redo',
            'color' => 'success',
        ],
        'delete' => [
            'label' => 'Delete Job',
            'modal' => [
                'heading' => 'Delete Job Manager',
                'description' => 'Are you sure you want to delete this Job Manager?',
            ],
            'messages' => [
                'success' => 'Job Manager deleted successfully',
            ],
            'icon' => 'trash',
            'color' => 'danger',
        ],
    ],
    'messages' => [
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
        'worker' => 'Worker',
        'monitor' => 'Monitor',
    ],
    'priorities' => [
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
    ],
];
