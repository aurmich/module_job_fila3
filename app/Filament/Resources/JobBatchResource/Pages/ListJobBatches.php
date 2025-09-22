<?php

/**
 * @see https://gitlab.com/amvisor/filament-failed-jobs/-/blob/master/src/resources/JobBatchesResource/Pages/ListJobBatches.php?ref_type=heads
 */

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\JobBatchResource\Pages;

use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Tables;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Artisan;
use Modules\Job\Filament\Resources\JobBatchResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Webmozart\Assert\Assert;

class ListJobBatches extends XotBaseListRecords
{
    protected static string $resource = JobBatchResource::class;

    /**
     * @return array<string, Tables\Columns\Column>
     */
<<<<<<< HEAD
    #[\Override]
    public function getTableColumns(): array
    {
        Assert::string(
            $date_format = config('app.date_format'),
            '[' . __LINE__ . '][' . class_basename(__CLASS__) . ']',
        );
=======
    public function getTableColumns(): array
    {
        Assert::string($date_format = config('app.date_format'), '['.__LINE__.']['.class_basename(__CLASS__).']');
>>>>>>> 1b7d3cd (.)

        return [
            'id' => TextColumn::make('id')
                ->searchable()
                ->sortable()
                ->copyable(),
            'name' => TextColumn::make('name')
                ->searchable()
                ->sortable()
                ->wrap(),
<<<<<<< HEAD
            'total_jobs' => TextColumn::make('total_jobs')->numeric()->sortable(),
            'pending_jobs' => TextColumn::make('pending_jobs')->numeric()->sortable(),
            'failed_jobs' => TextColumn::make('failed_jobs')->numeric()->sortable(),
            'progress' => TextColumn::make('progress')
                ->formatStateUsing(fn($record) => $record->progress() . '%')
=======
            'total_jobs' => TextColumn::make('total_jobs')
                ->numeric()
                ->sortable(),
            'pending_jobs' => TextColumn::make('pending_jobs')
                ->numeric()
                ->sortable(),
            'failed_jobs' => TextColumn::make('failed_jobs')
                ->numeric()
                ->sortable(),
            'progress' => TextColumn::make('progress')
                ->formatStateUsing(fn ($record) => $record->progress().'%')
>>>>>>> 1b7d3cd (.)
                ->sortable(),
            'failed_job_ids' => TextColumn::make('failed_job_ids')
                ->wrap()
                ->searchable()
                ->limit(50),
<<<<<<< HEAD
            'options' => TextColumn::make('options')->wrap()->searchable(),
            'cancelled_at' => TextColumn::make('cancelled_at')->dateTime($date_format)->sortable(),
=======
            'options' => TextColumn::make('options')
                ->wrap()
                ->searchable(),
            'cancelled_at' => TextColumn::make('cancelled_at')
                ->dateTime($date_format)
                ->sortable(),
>>>>>>> 1b7d3cd (.)
            'created_at' => TextColumn::make('created_at')
                ->dateTime($date_format)
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            'finished_at' => TextColumn::make('finished_at')
                ->dateTime($date_format)
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ];
    }

    /**
     * @return array<string, Tables\Actions\Action|Tables\Actions\ActionGroup>
     */
<<<<<<< HEAD
    #[\Override]
=======
>>>>>>> 1b7d3cd (.)
    public function getTableActions(): array
    {
        return [];
    }

    /**
     * @return array<string, Tables\Actions\BulkAction>
     */
<<<<<<< HEAD
    #[\Override]
=======
>>>>>>> 1b7d3cd (.)
    public function getTableBulkActions(): array
    {
        return [
            'delete' => DeleteBulkAction::make(),
        ];
    }

    /**
     * @return array<Action>
     */
<<<<<<< HEAD
    #[\Override]
=======
>>>>>>> 1b7d3cd (.)
    protected function getHeaderActions(): array
    {
        return [
            Action::make('prune_batches')
                ->requiresConfirmation()
                ->color('danger')
<<<<<<< HEAD
                ->action(static function (): void {
                    Artisan::call('queue:prune-batches');
                    Notification::make()
                        ->title('All batches have been pruned.')
                        ->success()
                        ->send();
                }),
=======
                ->action(
                    static function (): void {
                        Artisan::call('queue:prune-batches');
                        Notification::make()
                            ->title('All batches have been pruned.')
                            ->success()
                            ->send();
                    }
                ),
>>>>>>> 1b7d3cd (.)
        ];
    }
}
