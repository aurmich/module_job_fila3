<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\TenantResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Columns\TextColumn;
use Modules\UI\Enums\TableLayoutEnum;
use Modules\Xot\Filament\Traits\HasXotTable;
use Modules\Xot\Filament\Traits\TransTrait;

class UsersRelationManager extends RelationManager
{
    use TransTrait;
    use HasXotTable;
    protected static string $relationship = 'users';
    protected static ?string $recordTitleAttribute = 'name';
    public TableLayoutEnum $layoutView = TableLayoutEnum::LIST;

    public function form(Form $form): Form
    {
        return [
            TextColumn::make('name')
                ->label(__('user::attributes.name'))
                ->sortable()
                ->searchable(),
            TextColumn::make('email')
                ->label(__('user::attributes.email'))
                ->sortable()
                ->searchable(),
            TextColumn::make('created_at')
                ->label(__('user::attributes.created_at'))
                ->date()
                ->sortable(),
        ];
    }

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('name')
                ->label(trans('user::user.fields.name'))
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('email')
                ->label(trans('user::user.fields.email'))
                ->email()
                ->required()
                ->unique(ignoreRecord: true)
                ->maxLength(255),

            Forms\Components\DateTimePicker::make('email_verified_at')
                ->label(trans('user::user.fields.email_verified_at'))
                ->nullable(),

            Forms\Components\TextInput::make('password')
                ->label(trans('user::user.fields.password'))
                ->password()
                ->required(fn ($context) => 'create' === $context)
                ->minLength(8)
                ->same('password_confirmation')
                ->dehydrated(fn ($state) => filled($state))
                ->dehydrateStateUsing(fn ($state) => bcrypt($state)),

            Forms\Components\TextInput::make('password_confirmation')
                ->label(trans('user::user.fields.password_confirmation'))
                ->password()
                ->required(fn ($context) => 'create' === $context)
                ->minLength(8),
        ];
    }

    public function getListTableColumns(): array
    {
        return [
            TextColumn::make('id')
                ->label(trans('user::user.fields.id'))
                ->sortable()
                ->toggleable(),

            TextColumn::make('name')
                ->label(trans('user::user.fields.name'))
                ->searchable()
                ->sortable()
                ->toggleable(),

            TextColumn::make('email')
                ->label(trans('user::user.fields.email'))
                ->searchable()
                ->sortable()
                ->toggleable(),

            TextColumn::make('email_verified_at')
                ->label(trans('user::user.fields.email_verified_at'))
                ->dateTime()
                ->sortable()
                ->toggleable(),

            TextColumn::make('created_at')
                ->label(trans('user::user.fields.created_at'))
                ->dateTime()
                ->sortable()
                ->toggleable(),

            TextColumn::make('updated_at')
                ->label(trans('user::user.fields.updated_at'))
                ->dateTime()
                ->sortable()
                ->toggleable(),
        ];
    }
}