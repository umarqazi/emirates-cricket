<?php

namespace App\Policies;

use App\Setting;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class SettingPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->can('List Setting')
            ? Response::allow()
            : Response::deny('You aren\'t Authorized to perform this Action.');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Setting  $setting
     * @return mixed
     */
    public function view(User $user, Setting $setting)
    {
        return $user->can('Show Setting')
            ? Response::allow()
            : Response::deny('You aren\'t Authorized to perform this Action.');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->can('Create Setting')
            ? Response::allow()
            : Response::deny('You aren\'t Authorized to perform this Action.');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Setting  $setting
     * @return mixed
     */
    public function update(User $user, Setting $setting)
    {
        return $user->can('Update Setting')
            ? Response::allow()
            : Response::deny('You aren\'t Authorized to perform this Action.');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Setting  $setting
     * @return mixed
     */
    public function delete(User $user, Setting $setting)
    {
        return $user->can('Delete Setting')
            ? Response::allow()
            : Response::deny('You aren\'t Authorized to perform this Action.');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Setting  $setting
     * @return mixed
     */
    public function restore(User $user, Setting $setting)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Setting  $setting
     * @return mixed
     */
    public function forceDelete(User $user, Setting $setting)
    {
        //
    }
}
