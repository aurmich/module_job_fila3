<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources;

use Modules\Job\Filament\Resources\ExportResource\Pages;
use Modules\Job\Models\Export;
use Modules\Xot\Filament\Resources\XotBaseResource;

class ExportResource extends XotBaseResource
{
    protected static ?string $model = Export::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getFormSchema(): array
    {
        return [
            'name' => \Filament\Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
            'type' => \Filament\Forms\Components\Select::make('type')
                ->required()
                ->options([
                    'csv' => 'CSV',
                    'excel' => 'Excel',
                    'pdf' => 'PDF',
                ])
                ->default('csv'),
            'status' => \Filament\Forms\Components\Select::make('status')
                ->required()
                ->options([
                    'pending' => 'Pending',
                    'processing' => 'Processing',
                    'completed' => 'Completed',
                    'failed' => 'Failed',
                ])
                ->default('pending'),
            'error_message' => \Filament\Forms\Components\Textarea::make('error_message')
                ->maxLength(65535)
                ->columnSpanFull(),
            'total_records' => \Filament\Forms\Components\TextInput::make('total_records')
                ->numeric(),
            'processed_records' => \Filament\Forms\Components\TextInput::make('processed_records')
                ->numeric(),
            'file_path' => \Filament\Forms\Components\TextInput::make('file_path')
                ->maxLength(255),
            'completed_at' => \Filament\Forms\Components\DateTimePicker::make('completed_at'),
            'created_at' => \Filament\Forms\Components\DateTimePicker::make('created_at')
                ->disabled(),
            'updated_at' => \Filament\Forms\Components\DateTimePicker::make('updated_at')
                ->disabled(),
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListExports::route('/'),
            'create' => Pages\CreateExport::route('/create'),
            'edit' => Pages\EditExport::route('/{record}/edit'),
        ];
    }
}
