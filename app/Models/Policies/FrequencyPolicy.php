<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\Frequency;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 1b7d3cd6 (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 4f546674 (.)

class FrequencyPolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('frequency.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('frequency.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('frequency.viewAny');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.view');
=======
    public function view(ProfileContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function view(UserContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.view');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('frequency.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('frequency.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('frequency.create');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.update');
=======
    public function update(ProfileContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function update(UserContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.update');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.delete');
=======
    public function delete(ProfileContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function delete(UserContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.delete');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.restore');
=======
    public function restore(ProfileContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function restore(UserContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.restore');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function forceDelete(UserContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.forceDelete');
    }
}
=======
    public function forceDelete(ProfileContract $user, Frequency $frequency): bool
=======
    public function forceDelete(UserContract $user, Frequency $frequency): bool
>>>>>>> 4f546674 (.)
    {
        return $user->hasPermissionTo('frequency.forceDelete');
    }
<<<<<<< HEAD
}
>>>>>>> 1b7d3cd6 (.)
=======
}
>>>>>>> 4f546674 (.)
