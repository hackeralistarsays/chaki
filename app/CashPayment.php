<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CashPayment extends Model
{
    protected $fillable = [
        'student_payment_id', 'serial', 'amount', 'created_at', 'updated_at'
    ];

    /**
     * payment
     */
    public function payment()
    {
        return $this->belongsTo(StudentPayment::class, 'student_payment_id');
    }
}
