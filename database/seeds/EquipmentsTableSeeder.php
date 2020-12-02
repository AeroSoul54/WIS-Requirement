<?php

use Illuminate\Database\Seeder;

class EquipmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $equipments = [
        	['name' => 'Basketball', 'model' => 'GX7'],
        	['name' => 'Volleyball', 'model' => 'GX897'],
        	['name' => 'Softball', 'model' => 'GX57'],
            ['name' => 'Karate Mat', 'model' => 'BlueOne'],
            ['name' => 'Arnis Sticks', 'model' => '12THREE'],
            ['name' => 'Ladder', 'model' => '7-EQ2']
           
  		];

  		DB::table('equipment')->insert($equipments);
    }
}
