<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeeItem extends Model
{
    protected $fillable = [
        'courses_id','fee_structure_id', 'name', 'amount', 'created_at', 'updated_at'
    ];

    public function feestructure()
    {
        return $this->belongsTo(FeeStructure::class, 'fee_structure_id');
    }

    //Course relationship
    public function course()
    {
        return $this->belongsTo(Courses::class, 'courses_id');
    }
}
