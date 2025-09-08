<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\FailedImportRow;
<<<<<<< HEAD
use Modules\Xot\Contracts\ProfileContract;
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 97e08af (.)

class FailedImportRowPolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('failed_import_row.viewAny'); /** @phpstan-ignore method.nonObject */
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('failed_import_row.viewAny');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(ProfileContract $user, FailedImportRow $failed_import_row): bool
    {
        return $user->hasPermissionTo('failed_import_row.view'); /** @phpstan-ignore method.nonObject */
=======
    public function view(UserContract $user, FailedImportRow $failed_import_row): bool
    {
        return $user->hasPermissionTo('failed_import_row.view');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('failed_import_row.create'); /** @phpstan-ignore method.nonObject */
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('failed_import_row.create');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(ProfileContract $user, FailedImportRow $failed_import_row): bool
    {
        return $user->hasPermissionTo('failed_import_row.update'); /** @phpstan-ignore method.nonObject */
=======
    public function update(UserContract $user, FailedImportRow $failed_import_row): bool
    {
        return $user->hasPermissionTo('failed_import_row.update');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(ProfileContract $user, FailedImportRow $failed_import_row): bool
    {
        return $user->hasPermissionTo('failed_import_row.delete'); /** @phpstan-ignore method.nonObject */
=======
    public function delete(UserContract $user, FailedImportRow $failed_import_row): bool
    {
        return $user->hasPermissionTo('failed_import_row.delete');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(ProfileContract $user, FailedImportRow $failed_import_row): bool
    {
        return $user->hasPermissionTo('failed_import_row.restore'); /** @phpstan-ignore method.nonObject */
=======
    public function restore(UserContract $user, FailedImportRow $failed_import_row): bool
    {
        return $user->hasPermissionTo('failed_import_row.restore');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
    public function forceDelete(ProfileContract $user, FailedImportRow $failed_import_row): bool
    {
        return $user->hasPermissionTo('failed_import_row.forceDelete'); /** @phpstan-ignore method.nonObject */
    }
}
=======
    public function forceDelete(UserContract $user, FailedImportRow $failed_import_row): bool
    {
        return $user->hasPermissionTo('failed_import_row.forceDelete');
    }
}
>>>>>>> 97e08af (.)
