<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Foundation\Auth\User AS Authenticatable;
use Laravel\Sanctum\HasApiTokens;
class User extends Authenticatable
{
    // use AuthenticableTrait;
    use HasApiTokens;

    protected $table = 'users'; // اسم الجدول في قاعدة البيانات

    // العلاقات
    public function courses()
{
    return $this->hasMany(Course::class);
}

    public function sessions()
    {
        return $this->belongsToMany(Session::class);
    }

    public function lectures()
{
    return $this->belongsToMany(Lecture::class);
}
    protected $fillable = [
        'name', // أضف هذا السطر
        'email',
        'password',
        'role',
        // ... أضف باقي الحقول إذا كانت موجودة
    ];
    public function roles()
    {
    return $this->belongsToMany(Role::class);
    }

    public function trainings()
    {
    return $this->hasMany(Training::class);
    }
    // public function jobs()
    // {
    //     return $this->hasMany(Job::class);
    // }

    // public function certificates()
    // {
    //     return $this->hasMany(Certificate::class);
    // }

    // public function educationStages()
    // {
    //     return $this->hasMany(EducationStage::class);
    // }

}

