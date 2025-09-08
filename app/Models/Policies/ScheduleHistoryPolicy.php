<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\ScheduleHistory;
<<<<<<< HEAD
use Modules\Xot\Contracts\ProfileContract;
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 97e08af (.)

class ScheduleHistoryPolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('schedule_history.viewAny'); /** @phpstan-ignore method.nonObject */
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('schedule_history.viewAny');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(ProfileContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.view'); /** @phpstan-ignore method.nonObject */
=======
    public function view(UserContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.view');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('schedule_history.create'); /** @phpstan-ignore method.nonObject */
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('schedule_history.create');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(ProfileContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.update'); /** @phpstan-ignore method.nonObject */
=======
    public function update(UserContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.update');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(ProfileContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.delete'); /** @phpstan-ignore method.nonObject */
=======
    public function delete(UserContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.delete');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(ProfileContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.restore'); /** @phpstan-ignore method.nonObject */
=======
    public function restore(UserContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.restore');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
    public function forceDelete(ProfileContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.forceDelete'); /** @phpstan-ignore method.nonObject */
    }
}
=======
    public function forceDelete(UserContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.forceDelete');
    }
}
>>>>>>> 97e08af (.)
