<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'start_date', 'end_date'];

    // يمكنك هنا تعريف العلاقات مع نماذج أخرى إذا كنت بحاجة إلى ذلك.
    // Course.php

public function sessions()
{
    return $this->hasMany(Session::class);
}

public function admin()
{
    return $this->belongsTo(Admin::class);
}
public function lectures()
{
    return $this->hasMany(Lecture::class);
}
}

