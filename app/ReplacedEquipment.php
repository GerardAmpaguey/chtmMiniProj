<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReplacedEquipment extends Model
{
    protected $guarded = [];

    public function equipment()
    {
    	return $this->belongsTo(Equipment::class);
    }

    public function borrowed_equipment()
    {
    	return $this->belongsTo(BorrowedEquipment::class);
    }
}
