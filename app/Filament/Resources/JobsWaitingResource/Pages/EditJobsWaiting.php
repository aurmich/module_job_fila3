<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\JobsWaitingResource\Pages;

use Filament\Actions\DeleteAction;
use Modules\Job\Filament\Resources\JobsWaitingResource;
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
=======
>>>>>>> a8a9f0b7 (.)

class EditJobsWaiting extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
{
    protected static string $resource = JobsWaitingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
