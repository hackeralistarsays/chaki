<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
protected $table = 'courses';

public function feestructure()
{
    return $this->hasMany(FeeStructure::class);
}

public function details()
{
    return $this->hasOne(CoursesDetail::class);
}

/**
 * Student
 */
public function students()
{
    return $this->hasMany(Student::class);
}

/**
 * Fee Items Relationship
 */
public function feeitems()
{
    return $this->hasMany(FeeItem::class);
}

}
