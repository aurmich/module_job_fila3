<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 1b7d3cd (.)
=======
use Modules\Xot\Contracts\ProfileContract;
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 97e08af (.)
>>>>>>> 07b4046 (.)
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 56391e6 (.)
use Modules\Xot\Datas\XotData;

abstract class JobBasePolicy
{
    use HandlesAuthorization;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function before(UserContract $user, string $_ability): null|bool
    {
        $xotData = XotData::make();
        if ($user->hasRole('super-admin')) {
=======
=======
>>>>>>> 07b4046 (.)
=======
>>>>>>> 56391e6 (.)
    public function before(ProfileContract $user, string $ability): ?bool
    {
        $xotData = XotData::make();
        if ($user->hasRole('super-admin')/** @phpstan-ignore method.nonObject */) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1b7d3cd (.)
=======
=======
    public function before(UserContract $user, string $ability): ?bool
    {
        $xotData = XotData::make();
        if ($user->hasRole('super-admin')) {
>>>>>>> 97e08af (.)
>>>>>>> 07b4046 (.)
=======
>>>>>>> 56391e6 (.)
            return true;
        }

        return null;
    }
}
