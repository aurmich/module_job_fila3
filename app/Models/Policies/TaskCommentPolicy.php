<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\TaskComment;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 1b7d3cd6 (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 4f546674 (.)

class TaskCommentPolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('task_comment.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('task_comment.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('task_comment.viewAny');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.view');
=======
    public function view(ProfileContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function view(UserContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.view');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('task_comment.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('task_comment.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('task_comment.create');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.update');
=======
    public function update(ProfileContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function update(UserContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.update');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.delete');
=======
    public function delete(ProfileContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function delete(UserContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.delete');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.restore');
=======
    public function restore(ProfileContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function restore(UserContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.restore');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function forceDelete(UserContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.forceDelete');
    }
}
=======
    public function forceDelete(ProfileContract $user, TaskComment $task_comment): bool
=======
    public function forceDelete(UserContract $user, TaskComment $task_comment): bool
>>>>>>> 4f546674 (.)
    {
        return $user->hasPermissionTo('task_comment.forceDelete');
    }
<<<<<<< HEAD
}
>>>>>>> 1b7d3cd6 (.)
=======
}
>>>>>>> 4f546674 (.)
