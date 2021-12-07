<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankPayment extends Model
{
    protected $fillable = [
        'student_payment_id', 'serial', 'bank', 'branch', 'transaction_no', 'amount', 'transaction_date', 'created_at', 'updated_at'
    ];

    /**
     * student re;lationship
     */
    public function student()
    {
        return $this->belongsTo(StudentPayment::class, 'student_payment_id');
    }
}
