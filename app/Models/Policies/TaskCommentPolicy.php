<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\TaskComment;
<<<<<<< HEAD
use Modules\Xot\Contracts\ProfileContract;
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 97e08af (.)

class TaskCommentPolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('task_comment.viewAny'); /** @phpstan-ignore method.nonObject */
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('task_comment.viewAny');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(ProfileContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.view'); /** @phpstan-ignore method.nonObject */
=======
    public function view(UserContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.view');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('task_comment.create'); /** @phpstan-ignore method.nonObject */
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('task_comment.create');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(ProfileContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.update'); /** @phpstan-ignore method.nonObject */
=======
    public function update(UserContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.update');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(ProfileContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.delete'); /** @phpstan-ignore method.nonObject */
=======
    public function delete(UserContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.delete');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(ProfileContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.restore'); /** @phpstan-ignore method.nonObject */
=======
    public function restore(UserContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.restore');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
    public function forceDelete(ProfileContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.forceDelete'); /** @phpstan-ignore method.nonObject */
    }
}
=======
    public function forceDelete(UserContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.forceDelete');
    }
}
>>>>>>> 97e08af (.)
