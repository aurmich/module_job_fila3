<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\Frequency;
<<<<<<< HEAD
use Modules\Xot\Contracts\ProfileContract;
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 97e08af (.)

class FrequencyPolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('frequency.viewAny'); /** @phpstan-ignore method.nonObject */
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('frequency.viewAny');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(ProfileContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.view'); /** @phpstan-ignore method.nonObject */
=======
    public function view(UserContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.view');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('frequency.create'); /** @phpstan-ignore method.nonObject */
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('frequency.create');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(ProfileContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.update'); /** @phpstan-ignore method.nonObject */
=======
    public function update(UserContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.update');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(ProfileContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.delete'); /** @phpstan-ignore method.nonObject */
=======
    public function delete(UserContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.delete');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(ProfileContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.restore'); /** @phpstan-ignore method.nonObject */
=======
    public function restore(UserContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.restore');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
    public function forceDelete(ProfileContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.forceDelete'); /** @phpstan-ignore method.nonObject */
    }
}
=======
    public function forceDelete(UserContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.forceDelete');
    }
}
>>>>>>> 97e08af (.)
