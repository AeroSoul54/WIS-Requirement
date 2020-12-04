<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locker extends Model
{
	protected $table = 'locker';

	public function lockerRenting()
    {
    	return $this->belongsTo(LockerRenting::class);
    }

}
