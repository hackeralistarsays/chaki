<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MpesaPayment extends Model
{
    protected $fillable = [
        'student_payment_id', 'transaction_code', 'phone', 'transaction_date', 'amount', 'created_at', 'updated_at'
    ];

    /**
     * payment
     */
    public function payment()
    {
        return $this->belongsTo(StudentPayment::class, 'student_payment_id');
    }
}
