<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\Import;
<<<<<<< HEAD
use Modules\Xot\Contracts\ProfileContract;
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 97e08af (.)

class ImportPolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('import.viewAny'); /** @phpstan-ignore method.nonObject */
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('import.viewAny');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(ProfileContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.view'); /** @phpstan-ignore method.nonObject */
=======
    public function view(UserContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.view');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('import.create'); /** @phpstan-ignore method.nonObject */
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('import.create');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(ProfileContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.update'); /** @phpstan-ignore method.nonObject */
=======
    public function update(UserContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.update');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(ProfileContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.delete'); /** @phpstan-ignore method.nonObject */
=======
    public function delete(UserContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.delete');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(ProfileContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.restore'); /** @phpstan-ignore method.nonObject */
=======
    public function restore(UserContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.restore');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
    public function forceDelete(ProfileContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.forceDelete'); /** @phpstan-ignore method.nonObject */
    }
}
=======
    public function forceDelete(UserContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.forceDelete');
    }
}
>>>>>>> 97e08af (.)
