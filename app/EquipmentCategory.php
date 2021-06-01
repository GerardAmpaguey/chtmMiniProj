<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EquipmentCategory extends Model
{
	protected $guarded = [];

    public function equipment()
    {
    	return $this->hasMany(Equipment::class);
    }
}
