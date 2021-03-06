<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class borrowed_equipment extends Model
{
    protected $table = 'borrowed_equipments';
    protected $fillable = ['number_of_item'];

    public function equipment()
    {
    	return $this->hasOne(Equipment::class, 'id', 'equipment_id');
    }

    public function students()
    {
    	return $this->hasMany(Student::class, 'id_number', 'student_id');
    }
}
