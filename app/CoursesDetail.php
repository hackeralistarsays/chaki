<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoursesDetail extends Model
{
    protected $table = 'courses_details';

    public function course()
    {
        return $this->belongsTo(Courses::class, 'course_id');
    }
}
