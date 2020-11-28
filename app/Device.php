<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    public function borrowed_devices(){
    	return $this->belongsTo(borrowed_devices::class);
    }
}
