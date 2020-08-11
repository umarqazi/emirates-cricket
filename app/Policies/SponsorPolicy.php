<?php

namespace App\Policies;

use App\Sponsor;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class SponsorPolicy
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
        return $user->can('List Sponsor')
            ? Response::allow()
            : Response::deny('You aren\'t Authorized to perform this Action.');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Sponsor  $sponsor
     * @return mixed
     */
    public function view(User $user, Sponsor $sponsor)
    {
        return $user->can('Show Sponsor')
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
        return $user->can('Create Sponsor')
            ? Response::allow()
            : Response::deny('You aren\'t Authorized to perform this Action.');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Sponsor  $sponsor
     * @return mixed
     */
    public function update(User $user, Sponsor $sponsor)
    {
        return $user->can('Edit Sponsor')
            ? Response::allow()
            : Response::deny('You aren\'t Authorized to perform this Action.');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Sponsor  $sponsor
     * @return mixed
     */
    public function delete(User $user, Sponsor $sponsor)
    {
        return $user->can('Delete Sponsor')
            ? Response::allow()
            : Response::deny('You aren\'t Authorized to perform this Action.');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Sponsor  $sponsor
     * @return mixed
     */
    public function restore(User $user, Sponsor $sponsor)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Sponsor  $sponsor
     * @return mixed
     */
    public function forceDelete(User $user, Sponsor $sponsor)
    {
        //
    }
}
