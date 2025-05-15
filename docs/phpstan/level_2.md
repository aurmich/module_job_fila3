<<<<<<< Updated upstream


=======

=======



=======

>>>>>>> aurmich/dev
=======

>>>>>>> aurmich/dev

=======
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
# Rapporto PHPStan Livello 2 per il modulo Job

Data analisi: 2025-04-15 22:03:04

## Riepilogo

Trovati 1 errori al livello 2.

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
aurmich/dev
=======

>>>>>>> aurmich/dev

=======
aurmich/dev
>>>>>>> aurmich/dev
=======
aurmich/dev
>>>>>>> aurmich/dev

=======
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
=======
# Analisi PHPStan Livello 2 per il modulo Job

Data: Wed Apr 23 21:22:27 CEST 2025

## Errore di esecuzione

```
Note: Using configuration file /var/www/html/_bases/base_quaeris_fila3_mono/laravel/phpstan.neon.
   0/194 [░░░░░░░░░░░░░░░░░░░░░░░░░░░░]   0%[1G[2K  20/194 [▓▓░░░░░░░░░░░░░░░░░░░░░░░░░░]  10%[1G[2K  40/194 [▓▓▓▓▓░░░░░░░░░░░░░░░░░░░░░░░]  20%[1G[2K  60/194 [▓▓▓▓▓▓▓▓░░░░░░░░░░░░░░░░░░░░]  30%[1G[2K  80/194 [▓▓▓▓▓▓▓▓▓▓▓░░░░░░░░░░░░░░░░░]  41%[1G[2K 100/194 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓░░░░░░░░░░░░░░]  51%[1G[2K 120/194 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓░░░░░░░░░░░]  61%[1G[2K 140/194 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓░░░░░░░░]  72%[1G[2K 160/194 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓░░░░░]  82%[1G[2K 180/194 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓░░░]  92%[1G[2K 194/194 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓] 100%

{"totals":{"errors":0,"file_errors":1},"files":{"/var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Job/app/Models/Task.php":{"errors":1,"messages":[{"message":"PHPDoc tag @property-read for property Modules\\Job\\Models\\Task::$creator contains unknown class Modules\\Broker\\Models\\Profile.","line":86,"ignorable":true,"tip":"Learn more at https://phpstan.org/user-guide/discovering-symbols","identifier":"class.notFound"}]}},"errors":[]}```
>>>>>>> Stashed changes
