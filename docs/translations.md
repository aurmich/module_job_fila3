# Traduzioni del Modulo Job

## Collegamenti

- [Modulo Lang](../../Lang/docs/module_lang.md) - Documentazione principale sulle traduzioni
- [Regole Generali Traduzioni](../../Xot/docs/translations.md)

## Struttura

```
Modules/Job/
└── lang/
    ├── it/
    │   └── job.php
    └── en/
        └── job.php
```

## Contenuto

Il file `job.php` contiene le traduzioni per:
- Gestione job
- Code di lavoro
- Processi in background
- Schedulazione
- Monitoraggio
- Log job
- Errori job
- Configurazione job
- Priorità
- Stati job

## Esempi

```php
return [
    'queue' => [
        'label' => 'Code di Lavoro',
        'tooltip' => 'Gestisci le code di lavoro'
    ],
    'monitoring' => [
        'label' => 'Monitoraggio',
        'tooltip' => 'Monitora lo stato dei job'
    ],
    'scheduling' => [
        'label' => 'Schedulazione',
        'tooltip' => 'Configura la schedulazione dei job'
    ],
    'errors' => [
        'label' => 'Errori',
        'tooltip' => 'Visualizza gli errori dei job'
    ]
];
### Versione HEAD

``` 
## Collegamenti tra versioni di translations.md
* [translations.md](../../../Chart/docs/translations.md)
* [translations.md](../../../Reporting/docs/translations.md)
* [translations.md](../../../Gdpr/docs/translations.md)
* [translations.md](../../../Notify/docs/translations.md)
* [translations.md](../../../Xot/docs/roadmap/lang/translations.md)
* [translations.md](../../../Xot/docs/translations.md)
* [translations.md](../../../Dental/docs/translations.md)
* [translations.md](../../../User/docs/translations.md)
* [translations.md](../../../UI/docs/translations.md)
* [translations.md](../../../Lang/docs/packages/translations.md)
* [translations.md](../../../Lang/docs/translations.md)
* [translations.md](../../../Job/docs/translations.md)
* [translations.md](../../../Media/docs/translations.md)
* [translations.md](../../../Tenant/docs/translations.md)
* [translations.md](../../../Activity/docs/translations.md)
* [translations.md](../../../Patient/docs/translations.md)
* [translations.md](../../../Cms/docs/translations.md)


### Versione Incoming

``` 

---

## Novità 2025: Best practice obbligatorie

- Ogni file di traduzione deve avere la sezione `validation` con messaggi specifici per i campi principali.
- Ogni azione (`actions`) deve avere almeno `label`, `success`, `error`, `tooltip` dove serve.
- Tutti i campi in `fields` devono avere almeno `label`, `placeholder`, `help` o `tooltip`.
- Non rimuovere mai chiavi esistenti: solo aggiunte o miglioramenti.
- Uniformare la struttura tra i file (navigation, fields, actions, messages, validation, statuses, priorities, types, ecc.).

## Esempio aggiornato

```php
return [
    'fields' => [
        'job_id' => [
            'label' => 'Job ID',
            'placeholder' => 'Enter job ID',
            'help' => 'Unique identifier for the job',
        ],
    ],
    'actions' => [
        'import' => [
            'label' => 'Import',
            'success' => 'Import completed successfully',
            'error' => 'Import failed',
            'tooltip' => 'Import jobs from file',
        ],
    ],
    'validation' => [
        'job_id_required' => 'Job ID is required.',
    ],
];

