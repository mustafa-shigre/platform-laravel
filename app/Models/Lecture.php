<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', // وضع الحقل 'title' هنا إذا كنت تريد السماح بالتخزين الجماعي له
        'description',
        'video',
        // أي حقول إضافية يجب إضافتها هنا إذا كانت قابلة للتخزين الجماعي
    ];

    // Lecture.php
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function users()
{
    return $this->belongsToMany(User::class);
}

}

