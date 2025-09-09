<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\JobsWaiting;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 1b7d3cd6 (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 4f546674 (.)

class JobsWaitingPolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('jobs_waiting.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('jobs_waiting.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('jobs_waiting.viewAny');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, JobsWaiting $jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.view');
=======
    public function view(ProfileContract $user, JobsWaiting $jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function view(UserContract $user, JobsWaiting $jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.view');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('jobs_waiting.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('jobs_waiting.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('jobs_waiting.create');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, JobsWaiting $jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.update');
=======
    public function update(ProfileContract $user, JobsWaiting $jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function update(UserContract $user, JobsWaiting $jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.update');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, JobsWaiting $jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.delete');
=======
    public function delete(ProfileContract $user, JobsWaiting $jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function delete(UserContract $user, JobsWaiting $jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.delete');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, JobsWaiting $jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.restore');
=======
    public function restore(ProfileContract $user, JobsWaiting $jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function restore(UserContract $user, JobsWaiting $jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.restore');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function forceDelete(UserContract $user, JobsWaiting $jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.forceDelete');
    }
}
=======
    public function forceDelete(ProfileContract $user, JobsWaiting $jobs_waiting): bool
=======
    public function forceDelete(UserContract $user, JobsWaiting $jobs_waiting): bool
>>>>>>> 4f546674 (.)
    {
        return $user->hasPermissionTo('jobs_waiting.forceDelete');
    }
<<<<<<< HEAD
}
>>>>>>> 1b7d3cd6 (.)
=======
}
>>>>>>> 4f546674 (.)
