<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UtensilCategory extends Model
{
    protected $guarded = [];

    public function utensils()
    {
    	return $this->hasMany(Utensil::class);
    }
}
