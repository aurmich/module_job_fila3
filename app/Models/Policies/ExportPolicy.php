<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\Export;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 1b7d3cd6 (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 4f546674 (.)

class ExportPolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('export.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('export.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('export.viewAny');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.view');
=======
    public function view(ProfileContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function view(UserContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.view');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('export.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('export.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('export.create');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.update');
=======
    public function update(ProfileContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function update(UserContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.update');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.delete');
=======
    public function delete(ProfileContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function delete(UserContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.delete');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.restore');
=======
    public function restore(ProfileContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd6 (.)
=======
    public function restore(UserContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.restore');
>>>>>>> 4f546674 (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function forceDelete(UserContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.forceDelete');
    }
}
=======
    public function forceDelete(ProfileContract $user, Export $export): bool
=======
    public function forceDelete(UserContract $user, Export $export): bool
>>>>>>> 4f546674 (.)
    {
        return $user->hasPermissionTo('export.forceDelete');
    }
<<<<<<< HEAD
}
>>>>>>> 1b7d3cd6 (.)
=======
}
>>>>>>> 4f546674 (.)
