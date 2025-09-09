<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 1b7d3cd6 (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 4f546674 (.)
use Modules\Xot\Datas\XotData;

abstract class JobBasePolicy
{
    use HandlesAuthorization;

<<<<<<< HEAD
<<<<<<< HEAD
    public function before(UserContract $user, string $ability): ?bool
    {
        $xotData = XotData::make();
        if ($user->hasRole('super-admin')) {
=======
    public function before(ProfileContract $user, string $ability): ?bool
    {
        $xotData = XotData::make();
        if ($user->hasRole('super-admin')/** @phpstan-ignore method.nonObject */) {
>>>>>>> 1b7d3cd6 (.)
=======
    public function before(UserContract $user, string $ability): ?bool
    {
        $xotData = XotData::make();
        if ($user->hasRole('super-admin')) {
>>>>>>> 4f546674 (.)
            return true;
        }

        return null;
    }
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
}
>>>>>>> 1b7d3cd6 (.)
=======
}
>>>>>>> 4f546674 (.)
