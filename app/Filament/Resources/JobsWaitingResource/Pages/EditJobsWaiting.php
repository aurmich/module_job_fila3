<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\JobsWaitingResource\Pages;

use Filament\Actions\DeleteAction;
use Modules\Job\Filament\Resources\JobsWaitingResource;
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
>>>>>>> 0c25c04 (.)
=======
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
>>>>>>> Stashed changes

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
