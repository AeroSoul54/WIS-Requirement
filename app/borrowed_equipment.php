<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class borrowed_equipment extends Model
{

	protected $table = 'borrowed_equipments';

    public function equipment()
    {
    	return $this->hasOne(Equipment::class, 'id', 'equipment_id');
    }

    public function students()
    {
    	return $this->hasMany(Student::class, 'borrowed_equipments_id');
    }
}
