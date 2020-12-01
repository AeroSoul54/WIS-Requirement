<?php

use Illuminate\Database\Seeder;

class DevicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $devices = [
        	['name' => 'Acer Speaker', 'serial_number' => '014'],
            ['name' => 'HDMI Connector', 'serial_number' => '012'],
            ['name' => 'VGA Connector', 'serial_number' => '052'],
            ['name' => 'VGA Connector', 'serial_number' => '030'],
            ['name' => 'Samsung Tablet', 'serial_number' => '02'],
            ['name' => 'Toshiba Laptop', 'serial_number' => '03'],
            ['name' => 'HDMI Connector', 'serial_number' => '021'],
            ['name' => 'Portable Proejctor', 'serial_number' => '01'],
  		];

  		DB::table('devices')->insert($devices);
    }
}
