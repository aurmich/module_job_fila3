<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\TemporaryUploadResource\Pages;

use Filament\Actions\DeleteAction;
<<<<<<< HEAD
use Filament\Resources\Pages\EditRecord;
use Modules\Media\Filament\Resources\TemporaryUploadResource;

class EditTemporaryUpload extends EditRecord
=======
use Modules\Media\Filament\Resources\TemporaryUploadResource;

class EditTemporaryUpload extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
>>>>>>> origin/master
{
    protected static string $resource = TemporaryUploadResource::class;

    /**
     * @return DeleteAction[]
     *
     * @psalm-return list{DeleteAction}
     */
    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
