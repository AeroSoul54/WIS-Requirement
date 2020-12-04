<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LockerRenting extends Model
{
     public function student()
	{
		return $this->hasMany(students::class , 'id_number', 'student_id');
	}
	
	public function locker()
	{
		return $this->hasOne(Locker::class , 'id', 'locker_id');
	}
}
