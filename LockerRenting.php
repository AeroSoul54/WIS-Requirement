<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LockerRenting extends Model
{
    return $this->belongsTo(Locker::class);
}
