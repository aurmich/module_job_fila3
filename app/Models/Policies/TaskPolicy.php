<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\Task;
<<<<<<< HEAD
use Modules\Xot\Contracts\ProfileContract;
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 97e08af (.)

class TaskPolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('task.viewAny'); /** @phpstan-ignore method.nonObject */
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('task.viewAny');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(ProfileContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.view'); /** @phpstan-ignore method.nonObject */
=======
    public function view(UserContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.view');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('task.create'); /** @phpstan-ignore method.nonObject */
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('task.create');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(ProfileContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.update'); /** @phpstan-ignore method.nonObject */
=======
    public function update(UserContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.update');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(ProfileContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.delete'); /** @phpstan-ignore method.nonObject */
=======
    public function delete(UserContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.delete');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(ProfileContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.restore'); /** @phpstan-ignore method.nonObject */
=======
    public function restore(UserContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.restore');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
    public function forceDelete(ProfileContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.forceDelete'); /** @phpstan-ignore method.nonObject */
    }
}
=======
    public function forceDelete(UserContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.forceDelete');
    }
}
>>>>>>> 97e08af (.)
