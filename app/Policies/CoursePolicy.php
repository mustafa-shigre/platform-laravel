<?php

namespace App\Policies;

use App\Models\Course;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CoursePolicy
{

    public function index(User $user): bool
    {
        return  $user->roles->whereIn('name', ['admin','teacher','student'])->count() > 0 ;

    }
    public function show(User $user): bool
    {
        return  $user->roles->whereIn('name', ['admin','teacher'])->count() > 0 ;

    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return  $user->roles->whereIn('name', ['admin','teacher'])->count() > 0 ;
    }
    public function update(User $user): bool
    {
        return  $user->roles->whereIn('name', ['admin','teacher'])->count() > 0 ;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function edit(User $user, Course $course): bool
    {
        return  $user->roles->whereIn('name', ['admin','teacher'])->count() > 0 ;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function destroy(User $user, Course $course): bool
    {
        return  $user->roles->whereIn('name', ['admin','teacher'])->count() > 0 ;

    }


}
