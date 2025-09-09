<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\FailedImportRow;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 1b7d3cd6 (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 4f546674 (.)

class FailedImportRowPolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('failed_import_row.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('failed_import_row.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('failed_import_row.viewAny');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, FailedImportRow $failed_import_row): bool
    {
        return $user->hasPermissionTo('failed_import_row.view');
=======
    public function view(ProfileContract $user, FailedImportRow $failed_import_row): bool
    {
        return $user->hasPermissionTo('failed_import_row.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function view(UserContract $user, FailedImportRow $failed_import_row): bool
    {
        return $user->hasPermissionTo('failed_import_row.view');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('failed_import_row.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('failed_import_row.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('failed_import_row.create');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, FailedImportRow $failed_import_row): bool
    {
        return $user->hasPermissionTo('failed_import_row.update');
=======
    public function update(ProfileContract $user, FailedImportRow $failed_import_row): bool
    {
        return $user->hasPermissionTo('failed_import_row.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function update(UserContract $user, FailedImportRow $failed_import_row): bool
    {
        return $user->hasPermissionTo('failed_import_row.update');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, FailedImportRow $failed_import_row): bool
    {
        return $user->hasPermissionTo('failed_import_row.delete');
=======
    public function delete(ProfileContract $user, FailedImportRow $failed_import_row): bool
    {
        return $user->hasPermissionTo('failed_import_row.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function delete(UserContract $user, FailedImportRow $failed_import_row): bool
    {
        return $user->hasPermissionTo('failed_import_row.delete');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, FailedImportRow $failed_import_row): bool
    {
        return $user->hasPermissionTo('failed_import_row.restore');
=======
    public function restore(ProfileContract $user, FailedImportRow $failed_import_row): bool
    {
        return $user->hasPermissionTo('failed_import_row.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function restore(UserContract $user, FailedImportRow $failed_import_row): bool
    {
        return $user->hasPermissionTo('failed_import_row.restore');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function forceDelete(UserContract $user, FailedImportRow $failed_import_row): bool
    {
        return $user->hasPermissionTo('failed_import_row.forceDelete');
    }
}
=======
    public function forceDelete(ProfileContract $user, FailedImportRow $failed_import_row): bool
=======
    public function forceDelete(UserContract $user, FailedImportRow $failed_import_row): bool
>>>>>>> 4f546674 (.)
    {
        return $user->hasPermissionTo('failed_import_row.forceDelete');
    }
<<<<<<< HEAD
}
>>>>>>> 1b7d3cd6 (.)
=======
}
>>>>>>> 4f546674 (.)
