<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
<<<<<<< HEAD
use Modules\Xot\Contracts\ProfileContract;
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 97e08af (.)
use Modules\Xot\Datas\XotData;

abstract class JobBasePolicy
{
    use HandlesAuthorization;

<<<<<<< HEAD
    public function before(ProfileContract $user, string $ability): ?bool
    {
        $xotData = XotData::make();
        if ($user->hasRole('super-admin')/** @phpstan-ignore method.nonObject */) {
=======
    public function before(UserContract $user, string $ability): ?bool
    {
        $xotData = XotData::make();
        if ($user->hasRole('super-admin')) {
>>>>>>> 97e08af (.)
            return true;
        }

        return null;
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 97e08af (.)
