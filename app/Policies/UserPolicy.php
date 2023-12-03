<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    public function index(User $user): bool
    {
        return  $user->roles->whereIn('name', ['admin','teacher','student'])->count() > 0 ;
    }

    public function create(User $user)
    {
        return  $user->roles->whereIn('name',['admin','teacher'])->count() > 0 ;
    }

    public function destroy(User $user, User $model)
    {
        return  $user->roles->whereIn('name',['admin','teacher'])->count() > 0 ;
    }
    public function edit(User $user)
    {
        return  $user->roles->whereIn('name',['admin','teacher'])->count() > 0 ;
    }

}
