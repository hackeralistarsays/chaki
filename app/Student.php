<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //define the table to use
    protected $table = 'students';

    /**
     * Course
     */
    public function course()
    {
        return $this->belongsTo(Courses::class, 'courses_id');
    }
    /**
     * Payments
     */
     public function payments()
     {
         return $this->hasMany(StudentPayment::class);
     }

     /**
      * Invoice
      */
      public function invoices()
      {
          return $this->hasMany(StudentInvoice::class);
      }

      public function roll()
      {
          return $this->hasMany(NominalRoll::class);
      }
}
