<?php

use Illuminate\Database\Seeder;

class BorrowedDevicestableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $borrowed_devices = factory(\App\borrowed_device::class, 15)->create();
    }
}
