<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Lecture;

class LecturePolicy
{
    public function index(User $user): bool
    {
        return  $user->roles->whereIn('name', ['admin','teacher','student'])->count() > 0 ;

    }
    public function create(User $user)
    {
        return  $user->roles->whereIn('name', ['admin','teacher'])->count() > 0 ;
    }
    public function edit(User $user)
    {
        return  $user->roles->whereIn('name', ['admin','teacher'])->count() > 0 ;
    }

    public function update(User $user, Lecture $lecture)
    {
        return  $user->roles->whereIn('name', ['admin','teacher'])->count() > 0 ;
    }

    public function destroy(User $user, Lecture $lecture)
    {
        return  $user->roles->whereIn('name', ['admin','teacher'])->count() > 0 ;
    }
}
