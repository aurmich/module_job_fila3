<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\Parameter;
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

class ParameterPolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('parameter.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('parameter.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd (.)
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('parameter.viewAny'); /** @phpstan-ignore method.nonObject */
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('parameter.viewAny');
>>>>>>> 97e08af (.)
>>>>>>> 07b4046 (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, Parameter $_parameter): bool
    {
        return $user->hasPermissionTo('parameter.view');
=======
    public function view(ProfileContract $user, Parameter $parameter): bool
    {
        return $user->hasPermissionTo('parameter.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd (.)
=======
    public function view(ProfileContract $user, Parameter $parameter): bool
    {
        return $user->hasPermissionTo('parameter.view'); /** @phpstan-ignore method.nonObject */
=======
    public function view(UserContract $user, Parameter $parameter): bool
    {
        return $user->hasPermissionTo('parameter.view');
>>>>>>> 97e08af (.)
>>>>>>> 07b4046 (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('parameter.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('parameter.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd (.)
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('parameter.create'); /** @phpstan-ignore method.nonObject */
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('parameter.create');
>>>>>>> 97e08af (.)
>>>>>>> 07b4046 (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, Parameter $_parameter): bool
    {
        return $user->hasPermissionTo('parameter.update');
=======
    public function update(ProfileContract $user, Parameter $parameter): bool
    {
        return $user->hasPermissionTo('parameter.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd (.)
=======
    public function update(ProfileContract $user, Parameter $parameter): bool
    {
        return $user->hasPermissionTo('parameter.update'); /** @phpstan-ignore method.nonObject */
=======
    public function update(UserContract $user, Parameter $parameter): bool
    {
        return $user->hasPermissionTo('parameter.update');
>>>>>>> 97e08af (.)
>>>>>>> 07b4046 (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, Parameter $_parameter): bool
    {
        return $user->hasPermissionTo('parameter.delete');
=======
    public function delete(ProfileContract $user, Parameter $parameter): bool
    {
        return $user->hasPermissionTo('parameter.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd (.)
=======
    public function delete(ProfileContract $user, Parameter $parameter): bool
    {
        return $user->hasPermissionTo('parameter.delete'); /** @phpstan-ignore method.nonObject */
=======
    public function delete(UserContract $user, Parameter $parameter): bool
    {
        return $user->hasPermissionTo('parameter.delete');
>>>>>>> 97e08af (.)
>>>>>>> 07b4046 (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, Parameter $_parameter): bool
    {
        return $user->hasPermissionTo('parameter.restore');
=======
    public function restore(ProfileContract $user, Parameter $parameter): bool
    {
        return $user->hasPermissionTo('parameter.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd (.)
=======
    public function restore(ProfileContract $user, Parameter $parameter): bool
    {
        return $user->hasPermissionTo('parameter.restore'); /** @phpstan-ignore method.nonObject */
=======
    public function restore(UserContract $user, Parameter $parameter): bool
    {
        return $user->hasPermissionTo('parameter.restore');
>>>>>>> 97e08af (.)
>>>>>>> 07b4046 (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function forceDelete(UserContract $user, Parameter $parameter): bool
    {
        return $user->hasPermissionTo('parameter.forceDelete');
=======
=======
>>>>>>> 07b4046 (.)
    public function forceDelete(ProfileContract $user, Parameter $parameter): bool
    {
        return $user->hasPermissionTo('parameter.forceDelete'); /** @phpstan-ignore method.nonObject */
>>>>>>> 1b7d3cd (.)
    }
}
=======
    public function forceDelete(UserContract $user, Parameter $parameter): bool
    {
        return $user->hasPermissionTo('parameter.forceDelete');
    }
}
>>>>>>> 97e08af (.)
