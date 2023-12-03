<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Role;

class RolePolicy
{
    public function index(User $user): bool
    {
        return  $user->roles->whereIn('name', ['admin','teacher','student'])->count() > 0 ;
    }
    public function create(User $user): bool
    {
        return  $user->roles->whereIn('name',['admin'])->count() > 0 ;
    }
    public function store(User $user): bool
    {
        return  $user->roles->whereIn('name',['admin'])->count() > 0 ;
    }
    public function update(User $user): bool
    {
        return  $user->roles->whereIn('name',['admin'])->count() > 0 ;
    }


    public function edit(User $user, Role $role)
    {
        return  $user->roles->whereIn('name',['admin'])->count() > 0 ;
    }

    public function destroy(User $user, Role $role)
    {
        return  $user->roles->whereIn('name',['admin'])->count() > 0 ;
    }
}
