<?php

use Illuminate\Database\Seeder;

class LockerRentingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $locker_rents = factory(\App\LockerRenting::class, 15)->create();
    }
}
