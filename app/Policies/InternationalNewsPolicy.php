<?php

namespace App\Policies;

use App\InternationalNews;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class InternationalNewsPolicy
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
        return $user->can('List International News')
            ? Response::allow()
            : Response::deny('You aren\'t Authorized to perform this Action.');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\InternationalNews  $internationalNews
     * @return mixed
     */
    public function view(User $user, InternationalNews $internationalNews)
    {
        return $user->can('Show International News')
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
        return $user->can('Create International News')
            ? Response::allow()
            : Response::deny('You aren\'t Authorized to perform this Action.');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\InternationalNews  $internationalNews
     * @return mixed
     */
    public function update(User $user, InternationalNews $internationalNews)
    {
        return $user->can('Edit International News')
            ? Response::allow()
            : Response::deny('You aren\'t Authorized to perform this Action.');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\InternationalNews  $internationalNews
     * @return mixed
     */
    public function delete(User $user, InternationalNews $internationalNews)
    {
        return $user->can('Delete International News')
            ? Response::allow()
            : Response::deny('You aren\'t Authorized to perform this Action.');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\InternationalNews  $internationalNews
     * @return mixed
     */
    public function restore(User $user, InternationalNews $internationalNews)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\InternationalNews  $internationalNews
     * @return mixed
     */
    public function forceDelete(User $user, InternationalNews $internationalNews)
    {
        //
    }
}
