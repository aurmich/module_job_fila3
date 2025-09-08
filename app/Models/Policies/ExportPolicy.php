<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\Export;
<<<<<<< HEAD
use Modules\Xot\Contracts\ProfileContract;
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 97e08af (.)

class ExportPolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('export.viewAny'); /** @phpstan-ignore method.nonObject */
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('export.viewAny');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(ProfileContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.view'); /** @phpstan-ignore method.nonObject */
=======
    public function view(UserContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.view');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('export.create'); /** @phpstan-ignore method.nonObject */
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('export.create');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(ProfileContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.update'); /** @phpstan-ignore method.nonObject */
=======
    public function update(UserContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.update');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(ProfileContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.delete'); /** @phpstan-ignore method.nonObject */
=======
    public function delete(UserContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.delete');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(ProfileContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.restore'); /** @phpstan-ignore method.nonObject */
=======
    public function restore(UserContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.restore');
>>>>>>> 97e08af (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
    public function forceDelete(ProfileContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.forceDelete'); /** @phpstan-ignore method.nonObject */
    }
}
=======
    public function forceDelete(UserContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.forceDelete');
    }
}
>>>>>>> 97e08af (.)
