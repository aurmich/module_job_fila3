<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\Import;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 1b7d3cd (.)
=======
use Modules\Xot\Contracts\ProfileContract;
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 97e08af (.)
>>>>>>> 07b4046 (.)
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 56391e6 (.)

class ImportPolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('import.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('import.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd (.)
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('import.viewAny'); /** @phpstan-ignore method.nonObject */
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('import.viewAny');
>>>>>>> 97e08af (.)
>>>>>>> 07b4046 (.)
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('import.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> 56391e6 (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, Import $_import): bool
    {
        return $user->hasPermissionTo('import.view');
=======
    public function view(ProfileContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd (.)
=======
    public function view(ProfileContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.view'); /** @phpstan-ignore method.nonObject */
=======
    public function view(UserContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.view');
>>>>>>> 97e08af (.)
>>>>>>> 07b4046 (.)
=======
    public function view(ProfileContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> 56391e6 (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('import.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('import.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd (.)
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('import.create'); /** @phpstan-ignore method.nonObject */
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('import.create');
>>>>>>> 97e08af (.)
>>>>>>> 07b4046 (.)
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('import.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> 56391e6 (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, Import $_import): bool
    {
        return $user->hasPermissionTo('import.update');
=======
    public function update(ProfileContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd (.)
=======
    public function update(ProfileContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.update'); /** @phpstan-ignore method.nonObject */
=======
    public function update(UserContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.update');
>>>>>>> 97e08af (.)
>>>>>>> 07b4046 (.)
=======
    public function update(ProfileContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> 56391e6 (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, Import $_import): bool
    {
        return $user->hasPermissionTo('import.delete');
=======
    public function delete(ProfileContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd (.)
=======
    public function delete(ProfileContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.delete'); /** @phpstan-ignore method.nonObject */
=======
    public function delete(UserContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.delete');
>>>>>>> 97e08af (.)
>>>>>>> 07b4046 (.)
=======
    public function delete(ProfileContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> 56391e6 (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, Import $_import): bool
    {
        return $user->hasPermissionTo('import.restore');
=======
    public function restore(ProfileContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd (.)
=======
    public function restore(ProfileContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.restore'); /** @phpstan-ignore method.nonObject */
=======
    public function restore(UserContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.restore');
>>>>>>> 97e08af (.)
>>>>>>> 07b4046 (.)
=======
    public function restore(ProfileContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> 56391e6 (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function forceDelete(UserContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.forceDelete');
=======
=======
>>>>>>> 07b4046 (.)
=======
>>>>>>> 56391e6 (.)
    public function forceDelete(ProfileContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.forceDelete'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd (.)
    }
}
