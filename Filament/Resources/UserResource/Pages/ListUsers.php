<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\UserResource\Pages;

use Filament\Actions\CreateAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Validation\Rules\Password;
use Modules\User\Filament\Actions\ChangePasswordAction;
use Modules\User\Filament\Resources\UserResource;
use Modules\User\Filament\Resources\UserResource\Widgets\UserOverview;
use Modules\User\Models\Role;
use Modules\User\Models\User;

class ListUsers extends ListRecords
{
    // //
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            UserOverview::class,
        ];
    }

    public function getTableColumns(): array
    {
        return [
            // TextColumn::make('id')->sortable(),
            TextColumn::make('name')->sortable()->searchable(), // ->toggleable(),
            TextColumn::make('email')->sortable()->searchable(),
            // TextColumn::make('profile.first_name')->label('first name')->sortable()->searchable()->toggleable(),
            // TextColumn::make('profile.last_name')->label('last name')->sortable()->searchable()->toggleable(),
            TextColumn::make('teams.name')->searchable()->toggleable()->wrap()->badge(),
            // Tables\Columns\TextColumn::make('email'),
            // Tables\Columns\TextColumn::make('email_verified_at')
            //    ->dateTime(config('app.date_format')),
            TextColumn::make('role.name')->toggleable(),
            TextColumn::make('roles.name')->toggleable()->wrap()->badge(),
            // Tables\Columns\TextColumn::make('created_at')->dateTime(config('app.date_format')),
            // Tables\Columns\TextColumn::make('updated_at')
            //    ->dateTime(config('app.date_format')),
            // Tables\Columns\TextColumn::make('role_id'),
            // Tables\Columns\TextColumn::make('display_name'),
            // Tables\Columns\TextColumn::make('phone_number'),
            // Tables\Columns\TextColumn::make('phone_verified_at')
            //    ->dateTime(config('app.date_format')),
            // Tables\Columns\TextColumn::make('photo'),
            BooleanColumn::make('email_verified_at')->sortable()->searchable()->toggleable(),
            // ...static::extendTableCallback(),
        ];
    }

    public function getTableFilters(): array
    {
        return [
            /*
        SelectFilter::make('role')
            ->options([
                Role::ROLE_USER => 'User',
                Role::ROLE_OWNER => 'Owner',
                Role::ROLE_ADMINISTRATOR => 'Administrator',
            ])
            ->attribute('role_id'),
        */
            Filter::make('verified')
                ->label(trans('verified'))
                ->query(static fn (Builder $query): Builder => $query->whereNotNull('email_verified_at')),
            Filter::make('unverified')
                ->label(trans('unverified'))
                ->query(static fn (Builder $query): Builder => $query->whereNull('email_verified_at')),
        ];
    }

    public function getTableActions(): array
    {
        return [
            EditAction::make()
                ->label('')
                ->tooltip(__('filament-actions::edit.single.label')),
            ChangePasswordAction::make()
                ->label('')
                ->tooltip('Cambio Password'),
            /*
        Action::make('changePassword')
            ->action(function (User $user, array $data): void {
                $user->update([
                    'password' => Hash::make($data['new_password']),
                ]);
                Notification::make()->success()->title('Password changed successfully.');
            })
            ->form([
                TextInput::make('new_password')
                    ->password()
                    ->label('New Password')
                    ->required()
                    ->rule(Password::default()),
                TextInput::make('new_password_confirmation')
                    ->password()
                    ->label('Confirm New Password')
                    ->rule('required', fn ($get): bool => (bool) $get('new_password'))
                    ->same('new_password'),
            ])
            ->icon('heroicon-o-key')
        // ->visible(fn (User $record): bool => $record->role_id === Role::ROLE_ADMINISTRATOR)
        ,
        */
            Action::make('deactivate')
                ->label('')
                ->tooltip(__('filament-actions::delete.single.label'))
                ->color('danger')
                ->icon('heroicon-o-trash')
                ->action(static fn (User $user) => $user->delete())
            // ->visible(fn (User $record): bool => $record->role_id === Role::ROLE_ADMINISTRATOR)
            ,
        ];
    }

    public function getTableBulkActions(): array
    {
        return [
            DeleteBulkAction::make(),
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns($this->getTableColumns())
            ->filters($this->getTableFilters())
            ->actions($this->getTableActions())
            ->bulkActions($this->getTableBulkActions())
            ->filtersLayout(FiltersLayout::AboveContent)
            ->actionsPosition(ActionsPosition::BeforeColumns)
            ->defaultSort('users.created_at', 'desc');
    }
}
