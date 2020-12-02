<?php

use Illuminate\Database\Seeder;

class BorrowedEquiptmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $borrowed_equipments = factory(App\borrowed_equipment::class, 15)->create();
    }
}
