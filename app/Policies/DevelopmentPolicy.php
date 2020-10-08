<?php

namespace App\Policies;

use App\Development;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class DevelopmentPolicy
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
        return $user->can('List Development')
            ? Response::allow()
            : Response::deny('You aren\'t Authorized to perform this Action.');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Development  $development
     * @return mixed
     */
    public function view(User $user, Development $development)
    {
        return $user->can('Show Development')
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
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Development  $development
     * @return mixed
     */
    public function update(User $user, Development $development)
    {
        return $user->can('Update Development')
            ? Response::allow()
            : Response::deny('You aren\'t Authorized to perform this Action.');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Development  $development
     * @return mixed
     */
    public function delete(User $user, Development $development)
    {
        return $user->can('Delete Development')
            ? Response::allow()
            : Response::deny('You aren\'t Authorized to perform this Action.');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Development  $development
     * @return mixed
     */
    public function restore(User $user, Development $development)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Development  $development
     * @return mixed
     */
    public function forceDelete(User $user, Development $development)
    {
        //
    }
}
