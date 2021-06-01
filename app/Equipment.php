<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $guarded = [];
    
    public function equipment_category()
    {
    	return $this->belongsTo(EquipmentCategory::class);
    }

    public function replaced_equipment()
    {
    	return $this->hasOne(ReplacedEquipment::class);
    }

    public function borrowed_equipments()
    {
    	return $this->hasMany(BorrowedEquipment::class);
    }
}
