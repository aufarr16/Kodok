<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AccessPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function isAdmin(User $user){
        return $user->id_ulevel == '1' || $user->id_ulevel == '5';
    }

    public function isManager(User $user){
        return $user->id_ulevel == '2';
    }

    public function isEngineer(User $user){
        return $user->id_ulevel == '3' || $user->id_ulevel == '5' || $user->id_ulevel == '10';
    }
}
