<?php

use Illuminate\Database\Seeder;

class LockersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lockers = factory(\App\Locker::class, 15)->create();
    }
}
