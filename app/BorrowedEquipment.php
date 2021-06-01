<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BorrowedEquipment extends Model
{
	protected $guarded = [];

    public function equipment()
    {
    	return $this->belongsTo(Equipment::class)
    }

    public function borrower()
    {
    	return $this->belongsTo(Borrower::class);
    }
}
