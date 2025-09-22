<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Fields;

use Filament\Forms\Components\Repeater as ComponentsRepeater;
use Webmozart\Assert\Assert;

class Repeater extends ComponentsRepeater
{
<<<<<<< HEAD
    public function getItemLabel(string $uuid): null|string
=======
    public function getItemLabel(string $uuid): ?string
>>>>>>> 1b7d3cd (.)
    {
        $res = $this->evaluate($this->itemLabel, [
            'state' => $this->getChildComponentContainer($uuid)->getRawState(),
            'uuid' => $uuid,
        ]);
        Assert::nullOrString($res);

        return $res;
    }
}
