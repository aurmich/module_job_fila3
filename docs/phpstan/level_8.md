# PHPStan Report - Livello 8

## Errori rilevati
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Job/app/Filament/Resources/JobsWaitingResource/Pages/ListJobsWaiting.php: Method Modules\Job\Filament\Resources\JobsWaitingResource\Pages\ListJobsWaiting::getTableBulkActions() should return array<string, Filament\Tables\Actions\BulkAction> but returns array<int, Filament\Tables\Actions\DeleteBulkAction>. (line 48)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Job/app/Filament/Resources/JobsWaitingResource/Pages/ListJobsWaiting.php: Method Modules\Job\Filament\Resources\JobsWaitingResource\Pages\ListJobsWaiting::getListTableColumns() should return array<string, Filament\Tables\Columns\Column> but returns array<int, Filament\Tables\Columns\TextColumn>. (line 60)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Job/app/Models/Task.php: PHPDoc tag @property-read for property Modules\Job\Models\Task::$creator contains unknown class Modules\Broker\Models\Profile. (line 86)

## Soluzioni proposte

> TODO: descrivere soluzioni architetturali e funzionali

## Collegamenti

- Torna all'indice principale: [Indice Report PHPStan Moduli](/docs/phpstan_modules_index.md)
