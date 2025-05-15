<<<<<<< HEAD


=======
=======

>>>>>>> aurmich/dev

=======

>>>>>>> aurmich/dev
=======
>>>>>>> aurmich/dev

=======
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
# Rapporto PHPStan Livello 7 per il modulo Job

Data analisi: 2025-04-15 22:04:11

## Riepilogo

Trovati 1 errori al livello 7.

## Errori e suggerimenti

### File: `/var/www/html/saluteora/laravel/Modules/Job/app/Models/Task.php`

#### Linea 86: PHPDoc tag @property-read for property Modules\Job\Models\Task::$creator contains unknown class Modules\Broker\Models\Profile.

**Suggerimento generale**: Rivedi il codice per assicurarti che:
- Tutte le classi/interfacce utilizzate siano importate correttamente
- I tipi siano dichiarati e utilizzati in modo coerente
- Le variabili siano inizializzate prima dell'uso
- I nomi di metodi e proprietà siano corretti

## Risorse utili

- [Documentazione PHPStan](https://phpstan.org/user-guide/getting-started)
- [Tipi in PHP](https://www.php.net/manual/en/language.types.declarations.php)
- [PSR-12: Standard di codifica](https://www.php-fig.org/psr/psr-12/)


=======
=======

>>>>>>> aurmich/dev

=======
aurmich/dev
>>>>>>> aurmich/dev
=======
>>>>>>> aurmich/dev

=======
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
=======
# PHPStan Report - Livello 7

## Errori rilevati
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Job/app/Filament/Resources/JobsWaitingResource/Pages/ListJobsWaiting.php: Method Modules\Job\Filament\Resources\JobsWaitingResource\Pages\ListJobsWaiting::getTableBulkActions() should return array<string, Filament\Tables\Actions\BulkAction> but returns array<int, Filament\Tables\Actions\DeleteBulkAction>. (line 48)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Job/app/Filament/Resources/JobsWaitingResource/Pages/ListJobsWaiting.php: Method Modules\Job\Filament\Resources\JobsWaitingResource\Pages\ListJobsWaiting::getListTableColumns() should return array<string, Filament\Tables\Columns\Column> but returns array<int, Filament\Tables\Columns\TextColumn>. (line 60)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Job/app/Models/Task.php: PHPDoc tag @property-read for property Modules\Job\Models\Task::$creator contains unknown class Modules\Broker\Models\Profile. (line 86)

## Soluzioni proposte

> TODO: descrivere soluzioni architetturali e funzionali

## Collegamenti

- Torna all'indice principale: [Indice Report PHPStan Moduli](/docs/phpstan_modules_index.md)
>>>>>>> e7266cc (.)
