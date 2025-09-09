<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\JobManager;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 1b7d3cd6 (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 4f546674 (.)

class JobManagerPolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('job_manager.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('job_manager.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('job_manager.viewAny');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.view');
=======
    public function view(ProfileContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function view(UserContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.view');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('job_manager.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('job_manager.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('job_manager.create');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.update');
=======
    public function update(ProfileContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function update(UserContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.update');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.delete');
=======
    public function delete(ProfileContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function delete(UserContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.delete');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.restore');
=======
    public function restore(ProfileContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function restore(UserContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.restore');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function forceDelete(UserContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.forceDelete');
    }
}
=======
    public function forceDelete(ProfileContract $user, JobManager $job_manager): bool
=======
    public function forceDelete(UserContract $user, JobManager $job_manager): bool
>>>>>>> 4f546674 (.)
    {
        return $user->hasPermissionTo('job_manager.forceDelete');
    }
<<<<<<< HEAD
}
>>>>>>> 1b7d3cd6 (.)
=======
}
>>>>>>> 4f546674 (.)
