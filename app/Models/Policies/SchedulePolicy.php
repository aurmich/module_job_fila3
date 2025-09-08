<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\Schedule;
<<<<<<< HEAD
use Modules\Xot\Contracts\ProfileContract;
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 97e08af (.)

class SchedulePolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('schedule.viewAny'); /** @phpstan-ignore method.nonObject */
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('schedule.viewAny');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(ProfileContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.view'); /** @phpstan-ignore method.nonObject */
=======
    public function view(UserContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.view');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('schedule.create'); /** @phpstan-ignore method.nonObject */
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('schedule.create');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(ProfileContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.update'); /** @phpstan-ignore method.nonObject */
=======
    public function update(UserContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.update');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(ProfileContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.delete'); /** @phpstan-ignore method.nonObject */
=======
    public function delete(UserContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.delete');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(ProfileContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.restore'); /** @phpstan-ignore method.nonObject */
=======
    public function restore(UserContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.restore');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
    public function forceDelete(ProfileContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.forceDelete'); /** @phpstan-ignore method.nonObject */
    }
}
=======
    public function forceDelete(UserContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.forceDelete');
    }
}
>>>>>>> 97e08af (.)
