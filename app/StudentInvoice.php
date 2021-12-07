<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentInvoice extends Model
{
    protected $fillable = [
        'student_id', 'serial', 'amount', 'status', 'created_at', 'updated_at'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function payment()
    {
        return $this->hasOne(StudentPayment::class);
    }
}
