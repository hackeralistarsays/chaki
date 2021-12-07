<?php

namespace App;

use Courses;
use Illuminate\Database\Eloquent\Model;

class StudentPayment extends Model
{
    protected $fillable = [
        'student_id', 'course_id','student_invoice_id', 'created_at', 'updated_at'
    ];

    /**
     * Student relationship
     */
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
    /**
     * Course Relationship
     */
    public function course()
    {
        return $this->belongsTo(Courses::class, 'course_id');
    }

    public function invoice()
    {
        return $this->belongsTo(StudentInvoice::class, 'student_invoice_id');
    }
}
