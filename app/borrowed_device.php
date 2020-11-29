<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class borrowed_device extends Model
{
    public function students(){
    	return $this->hasMany(Student::class, 'id_number', 'student_id');
    }

    public function deivce(){
    	return $this->hasOne(Device::class, 'id', 'device_id');
    }
}
