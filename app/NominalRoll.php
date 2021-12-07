<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NominalRoll extends Model
{
    protected $fillable = [
        'student_id', 'session', 'progress', 'status', 'disciplinary', 'created_at', 'updated_at'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
}
