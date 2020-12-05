<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Locker;
use Faker\Generator as Faker;

$factory->define(Locker::class, function (Faker $faker) {
    return [
        
             'building_name'=> $faker->company,
             'locker_floor'=> $faker->randomDigitNot(0,1,2,3,9) 

    ];
});
