<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\ImportResource\Pages;

use Filament\Tables;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Modules\Job\Filament\Resources\ImportResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListImports extends XotBaseListRecords
{
    protected static string $resource = ImportResource::class;

    /**
     * @return array<string, Tables\Columns\Column>
     */
<<<<<<< HEAD
    #[\Override]
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')->searchable()->sortable(),
=======
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')
                ->searchable()
                ->sortable(),
>>>>>>> 1b7d3cd (.)
            'file_name' => TextColumn::make('file_name')
                ->searchable()
                ->sortable()
                ->wrap(),
<<<<<<< HEAD
            'file_disk' => TextColumn::make('file_disk')->searchable()->sortable(),
            'importer' => TextColumn::make('importer')->searchable()->sortable(),
            'processed_rows' => TextColumn::make('processed_rows')->numeric()->sortable(),
            'total_rows' => TextColumn::make('total_rows')->numeric()->sortable(),
            'successful_rows' => TextColumn::make('successful_rows')->numeric()->sortable(),
            'completed_at' => TextColumn::make('completed_at')->dateTime()->sortable(),
=======
            'file_disk' => TextColumn::make('file_disk')
                ->searchable()
                ->sortable(),
            'importer' => TextColumn::make('importer')
                ->searchable()
                ->sortable(),
            'processed_rows' => TextColumn::make('processed_rows')
                ->numeric()
                ->sortable(),
            'total_rows' => TextColumn::make('total_rows')
                ->numeric()
                ->sortable(),
            'successful_rows' => TextColumn::make('successful_rows')
                ->numeric()
                ->sortable(),
            'completed_at' => TextColumn::make('completed_at')
                ->dateTime()
                ->sortable(),
>>>>>>> 1b7d3cd (.)
            'created_at' => TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            'updated_at' => TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ];
    }

    /**
     * @return array<string, Tables\Filters\BaseFilter>
     */
<<<<<<< HEAD
    #[\Override]
    public function getTableFilters(): array
    {
        return [];
=======
    public function getTableFilters(): array
    {
        return [
        ];
>>>>>>> 1b7d3cd (.)
    }

    /**
     * @return array<string, Tables\Actions\Action|Tables\Actions\ActionGroup>
     */
<<<<<<< HEAD
    #[\Override]
    public function getTableActions(): array
    {
        return [
            'edit' => EditAction::make(),
=======
    public function getTableActions(): array
    {
        return [
            'edit' => EditAction::make()
                ,
>>>>>>> 1b7d3cd (.)
        ];
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
}
