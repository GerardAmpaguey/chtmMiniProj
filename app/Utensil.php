<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utensil extends Model
{
    protected $guarded = [];
    public function utensil_category()
    {
    	return $this->belongsTo(UtensilCategory::class);
    }

    public function borrowed_utensils()
    {
    	return $this->hasMany(BorrowedUtensil::class);
    }
}
