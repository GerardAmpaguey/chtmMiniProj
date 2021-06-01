<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
    protected $guarded = [];

    public function borrowed_equipment()
    {
    	return $this->hasMany(BorrowedEquipment::class);
    }

    public function borrowed_utensils()
    {
    	return $this->hasMany(BorrowedUtensil::class);
    }



    public function getFullNameAttribute()
    {
    	return $this->first_name.' '.$this->last_name;
    }
}
