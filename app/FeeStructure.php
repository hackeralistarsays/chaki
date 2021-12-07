<?php

namespace App;

use App\Courses as AppCourses;
use Courses;
use Illuminate\Database\Eloquent\Model;

class FeeStructure extends Model
{
    protected $fillable = [
        'course_id', 'semester', 'year', 'created_at', 'updated_at'
    ];

    public function feeitems()
    {
        return $this->hasMany(FeeItem::class);
    }

    public function course()
    {
        return $this->belongsTo(AppCourses::class, 'courses_id');
    }
}
