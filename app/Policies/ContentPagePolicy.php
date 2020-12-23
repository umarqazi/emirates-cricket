<?php

namespace App\Policies;

use App\ContentPage;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class ContentPagePolicy
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
        return $user->can('List About Pages')
            ? Response::allow()
            : Response::deny('You aren\'t Authorized to perform this Action.');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\ContentPage  $contentPage
     * @return mixed
     */
    public function view(User $user, ContentPage $contentPage)
    {
        return $user->can('Show About Pages')
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
     * @param  \App\ContentPage  $contentPage
     * @return mixed
     */
    public function update(User $user, ContentPage $contentPage)
    {
        return $user->can('Update About Pages')
            ? Response::allow()
            : Response::deny('You aren\'t Authorized to perform this Action.');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\ContentPage  $contentPage
     * @return mixed
     */
    public function delete(User $user, ContentPage $contentPage)
    {
        return $user->can('Delete About Pages')
            ? Response::allow()
            : Response::deny('You aren\'t Authorized to perform this Action.');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\ContentPage  $contentPage
     * @return mixed
     */
    public function restore(User $user, ContentPage $contentPage)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\ContentPage  $contentPage
     * @return mixed
     */
    public function forceDelete(User $user, ContentPage $contentPage)
    {
        //
    }
}
