<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locker extends Model
{
	protected $table = 'locker';

	public function student()
	{
		return $this->belongsToOne(students::class , 'id_number', 'student_id');
	}

	
	public function LockerRenting()
	{
		return $this->belongsToOne(LockerRent::class , 'rent_end_date', 'rent_start_date');
	}

}
