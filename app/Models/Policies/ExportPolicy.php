<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\Export;
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

class ExportPolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('export.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('export.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd (.)
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('export.viewAny'); /** @phpstan-ignore method.nonObject */
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('export.viewAny');
>>>>>>> 97e08af (.)
>>>>>>> 07b4046 (.)
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('export.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> 56391e6 (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, Export $_export): bool
    {
        return $user->hasPermissionTo('export.view');
=======
    public function view(ProfileContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd (.)
=======
    public function view(ProfileContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.view'); /** @phpstan-ignore method.nonObject */
=======
    public function view(UserContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.view');
>>>>>>> 97e08af (.)
>>>>>>> 07b4046 (.)
=======
    public function view(ProfileContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.view'); /** @phpstan-ignore method.nonObject */
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
        return $user->hasPermissionTo('export.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('export.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd (.)
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('export.create'); /** @phpstan-ignore method.nonObject */
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('export.create');
>>>>>>> 97e08af (.)
>>>>>>> 07b4046 (.)
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('export.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> 56391e6 (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, Export $_export): bool
    {
        return $user->hasPermissionTo('export.update');
=======
    public function update(ProfileContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd (.)
=======
    public function update(ProfileContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.update'); /** @phpstan-ignore method.nonObject */
=======
    public function update(UserContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.update');
>>>>>>> 97e08af (.)
>>>>>>> 07b4046 (.)
=======
    public function update(ProfileContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> 56391e6 (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, Export $_export): bool
    {
        return $user->hasPermissionTo('export.delete');
=======
    public function delete(ProfileContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd (.)
=======
    public function delete(ProfileContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.delete'); /** @phpstan-ignore method.nonObject */
=======
    public function delete(UserContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.delete');
>>>>>>> 97e08af (.)
>>>>>>> 07b4046 (.)
=======
    public function delete(ProfileContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> 56391e6 (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, Export $_export): bool
    {
        return $user->hasPermissionTo('export.restore');
=======
    public function restore(ProfileContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd (.)
=======
    public function restore(ProfileContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.restore'); /** @phpstan-ignore method.nonObject */
=======
    public function restore(UserContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.restore');
>>>>>>> 97e08af (.)
>>>>>>> 07b4046 (.)
=======
    public function restore(ProfileContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> 56391e6 (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function forceDelete(UserContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.forceDelete');
=======
=======
>>>>>>> 07b4046 (.)
=======
>>>>>>> 56391e6 (.)
    public function forceDelete(ProfileContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.forceDelete'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd (.)
    }
}
