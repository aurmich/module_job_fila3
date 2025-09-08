<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\Result;
<<<<<<< HEAD
use Modules\Xot\Contracts\ProfileContract;
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 97e08af (.)

class ResultPolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('result.viewAny'); /** @phpstan-ignore method.nonObject */
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('result.viewAny');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(ProfileContract $user, Result $result): bool
    {
        return $user->hasPermissionTo('result.view'); /** @phpstan-ignore method.nonObject */
=======
    public function view(UserContract $user, Result $result): bool
    {
        return $user->hasPermissionTo('result.view');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('result.create'); /** @phpstan-ignore method.nonObject */
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('result.create');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(ProfileContract $user, Result $result): bool
    {
        return $user->hasPermissionTo('result.update'); /** @phpstan-ignore method.nonObject */
=======
    public function update(UserContract $user, Result $result): bool
    {
        return $user->hasPermissionTo('result.update');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(ProfileContract $user, Result $result): bool
    {
        return $user->hasPermissionTo('result.delete'); /** @phpstan-ignore method.nonObject */
=======
    public function delete(UserContract $user, Result $result): bool
    {
        return $user->hasPermissionTo('result.delete');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(ProfileContract $user, Result $result): bool
    {
        return $user->hasPermissionTo('result.restore'); /** @phpstan-ignore method.nonObject */
=======
    public function restore(UserContract $user, Result $result): bool
    {
        return $user->hasPermissionTo('result.restore');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
    public function forceDelete(ProfileContract $user, Result $result): bool
    {
        return $user->hasPermissionTo('result.forceDelete'); /** @phpstan-ignore method.nonObject */
    }
}
=======
    public function forceDelete(UserContract $user, Result $result): bool
    {
        return $user->hasPermissionTo('result.forceDelete');
    }
}
>>>>>>> 97e08af (.)
