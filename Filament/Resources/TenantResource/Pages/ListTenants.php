<?php

/**
 * Tenant List Management.
 */
declare(strict_types=1);

namespace Modules\User\Filament\Resources\TenantResource\Pages;

use Modules\UI\Enums\TableLayoutEnum;
use Filament\Tables\Columns\TextColumn;
use Filament\Resources\Pages\ListRecords;
use Modules\Xot\Filament\Traits\HasXotTable;
use Modules\Xot\Filament\Pages\XotBaseListRecords;
use Modules\User\Filament\Resources\TenantResource;

class ListTenants extends XotBaseListRecords
{
    
    protected static string $resource = TenantResource::class;

    /**
     * Definisce le colonne della tabella per la lista tenant.
     */
    public function getListTableColumns(): array
    {
        return [
            TextColumn::make('id')
                ->label(__('user::fields.id.label'))
                ->searchable()
                ->sortable(),

            TextColumn::make('name')
                ->label(__('user::fields.name.label'))
                ->searchable(),

            TextColumn::make('slug')
                ->label(__('user::fields.slug.label'))
                ->default(function ($record) {
                    $record->slug = $record->generateSlug();
                    $record->save();

                    return $record->slug;
                })
                ->sortable(),
        ];
    }
}
