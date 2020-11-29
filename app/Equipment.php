<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{

    public function borrowed_equipments()
    {
    	// return $this->hasMany(borrowed_equipment::class, 'equipment_id', 'id');
    	return $this->belongsTo(borrowed_equipment::class);
    }

    
}
