<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReplacedUtensil extends Model
{
    protected $guarded = [];

    public function borrowed_utensil()
    {
    	return $this->belongsTo(BorrowedUtensil::class);
    }
}
