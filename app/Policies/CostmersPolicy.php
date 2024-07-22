<?php

namespace App\Policies;

use App\Models\Costmers;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CostmersPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Costmers  $costmers
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Costmers $costmers)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Costmers  $costmers
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Costmers $costmers)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Costmers  $costmers
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Costmers $costmers)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Costmers  $costmers
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Costmers $costmers)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Costmers  $costmers
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Costmers $costmers)
    {
        //
    }
}
