<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\ScheduleResource\Pages;

use Filament\Forms\Form;
use Webmozart\Assert\Assert;
use Illuminate\Support\Collection;
use Filament\Notifications\Notification;
use Illuminate\Validation\ValidationException;
use Modules\Job\Filament\Resources\ScheduleResource;
use Modules\Xot\Filament\Traits\NavigationPageLabelTrait;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;

class EditSchedule extends XotBaseEditRecord
{
    

    public Collection $commands;

    protected static string $resource = ScheduleResource::class;

    

    protected function onValidationError(ValidationException $exception): void
    {
        Notification::make()
            ->title($exception->getMessage())
            ->danger()
            ->send();
    }

    // protected function getRedirectUrl(): string
    // {
    //    return $this->getResource()::getUrl('index');
    // }
}
