<?php

namespace App\Policies;

use App\TeamPlayer;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class TeamPlayerPolicy
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
        return $user->can('List Team Player')
            ? Response::allow()
            : Response::deny('You aren\'t Authorized to perform this Action.');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\TeamPlayer  $teamPlayer
     * @return mixed
     */
    public function view(User $user, TeamPlayer $teamPlayer)
    {
        return $user->can('Show Team Player')
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
        return $user->can('Create Team Player')
            ? Response::allow()
            : Response::deny('You aren\'t Authorized to perform this Action.');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\TeamPlayer  $teamPlayer
     * @return mixed
     */
    public function update(User $user, TeamPlayer $teamPlayer)
    {
        return $user->can('Edit Team Player')
            ? Response::allow()
            : Response::deny('You aren\'t Authorized to perform this Action.');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\TeamPlayer  $teamPlayer
     * @return mixed
     */
    public function delete(User $user, TeamPlayer $teamPlayer)
    {
        return $user->can('Delete Team Player')
            ? Response::allow()
            : Response::deny('You aren\'t Authorized to perform this Action.');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\TeamPlayer  $teamPlayer
     * @return mixed
     */
    public function restore(User $user, TeamPlayer $teamPlayer)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\TeamPlayer  $teamPlayer
     * @return mixed
     */
    public function forceDelete(User $user, TeamPlayer $teamPlayer)
    {
        //
    }
}
