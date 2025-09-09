<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\Schedule;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 1b7d3cd6 (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 4f546674 (.)

class SchedulePolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('schedule.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('schedule.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('schedule.viewAny');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.view');
=======
    public function view(ProfileContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function view(UserContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.view');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('schedule.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('schedule.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('schedule.create');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.update');
=======
    public function update(ProfileContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function update(UserContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.update');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.delete');
=======
    public function delete(ProfileContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function delete(UserContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.delete');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.restore');
=======
    public function restore(ProfileContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function restore(UserContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.restore');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function forceDelete(UserContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.forceDelete');
    }
}
=======
    public function forceDelete(ProfileContract $user, Schedule $schedule): bool
=======
    public function forceDelete(UserContract $user, Schedule $schedule): bool
>>>>>>> 4f546674 (.)
    {
        return $user->hasPermissionTo('schedule.forceDelete');
    }
<<<<<<< HEAD
}
>>>>>>> 1b7d3cd6 (.)
=======
}
>>>>>>> 4f546674 (.)
