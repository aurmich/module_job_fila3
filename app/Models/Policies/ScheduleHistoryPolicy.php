<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\ScheduleHistory;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 1b7d3cd6 (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 4f546674 (.)

class ScheduleHistoryPolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('schedule_history.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('schedule_history.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('schedule_history.viewAny');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.view');
=======
    public function view(ProfileContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function view(UserContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.view');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('schedule_history.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('schedule_history.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('schedule_history.create');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.update');
=======
    public function update(ProfileContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function update(UserContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.update');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.delete');
=======
    public function delete(ProfileContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function delete(UserContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.delete');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.restore');
=======
    public function restore(ProfileContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function restore(UserContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.restore');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function forceDelete(UserContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.forceDelete');
    }
}
=======
    public function forceDelete(ProfileContract $user, ScheduleHistory $schedule_history): bool
=======
    public function forceDelete(UserContract $user, ScheduleHistory $schedule_history): bool
>>>>>>> 4f546674 (.)
    {
        return $user->hasPermissionTo('schedule_history.forceDelete');
    }
<<<<<<< HEAD
}
>>>>>>> 1b7d3cd6 (.)
=======
}
>>>>>>> 4f546674 (.)
