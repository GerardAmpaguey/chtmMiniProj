<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BorrowedUtensil extends Model
{
    protected $guarded = [];

    public function utensil()
    {
    	return $this->belongsTo(Utensil::class);
    }

    public function borrower()
    {
    	return $this->belongsTo(Borrower::class);
    }
}
