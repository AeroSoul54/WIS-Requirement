<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LockerRenting extends Model
{
     public function locker() 
     {
     	 return $this->hasOne(Locker::class, 'id', 'locker_rent_id');
     }

      public function students() 
     {
     	 return $this->hasMany(Student::class, 'id_number', 'student_id');
     }
    
    
}
