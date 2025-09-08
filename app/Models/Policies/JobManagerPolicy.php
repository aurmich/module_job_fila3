<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\JobManager;
<<<<<<< HEAD
use Modules\Xot\Contracts\ProfileContract;
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 97e08af (.)

class JobManagerPolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('job_manager.viewAny'); /** @phpstan-ignore method.nonObject */
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('job_manager.viewAny');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(ProfileContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.view'); /** @phpstan-ignore method.nonObject */
=======
    public function view(UserContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.view');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('job_manager.create'); /** @phpstan-ignore method.nonObject */
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('job_manager.create');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(ProfileContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.update'); /** @phpstan-ignore method.nonObject */
=======
    public function update(UserContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.update');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(ProfileContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.delete'); /** @phpstan-ignore method.nonObject */
=======
    public function delete(UserContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.delete');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(ProfileContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.restore'); /** @phpstan-ignore method.nonObject */
=======
    public function restore(UserContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.restore');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
    public function forceDelete(ProfileContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.forceDelete'); /** @phpstan-ignore method.nonObject */
    }
}
=======
    public function forceDelete(UserContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.forceDelete');
    }
}
>>>>>>> 97e08af (.)
