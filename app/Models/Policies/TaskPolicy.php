<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\Task;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 1b7d3cd6 (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 4f546674 (.)

class TaskPolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('task.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('task.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('task.viewAny');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.view');
=======
    public function view(ProfileContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function view(UserContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.view');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('task.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('task.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('task.create');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.update');
=======
    public function update(ProfileContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function update(UserContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.update');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.delete');
=======
    public function delete(ProfileContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function delete(UserContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.delete');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.restore');
=======
    public function restore(ProfileContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function restore(UserContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.restore');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function forceDelete(UserContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.forceDelete');
    }
}
=======
    public function forceDelete(ProfileContract $user, Task $task): bool
=======
    public function forceDelete(UserContract $user, Task $task): bool
>>>>>>> 4f546674 (.)
    {
        return $user->hasPermissionTo('task.forceDelete');
    }
<<<<<<< HEAD
}
>>>>>>> 1b7d3cd6 (.)
=======
}
>>>>>>> 4f546674 (.)
