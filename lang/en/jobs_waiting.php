<?php

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
        ],
    ],
    'actions' => [
        'import' => [
            'label' => 'Import',
            'tooltip' => 'Import data from an XLS or CSV file',
            'icon' => 'import-icon',
            'color' => 'blue',
            'fields' => [
                'import_file' => [
                    'label' => 'Select an XLS or CSV file to upload',
                    'tooltip' => 'Select a file to upload for import',
                    'placeholder' => 'Choose a file',
                ],
            ],
        ],
        'export' => [
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
                ],
            ],
        ],
        'process' => [
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
            ],
        ],
    ],
    'messages' => [
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
];
