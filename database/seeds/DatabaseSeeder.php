<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call([
            BorrowedEquipmentsTableSeeder::class,
            BorrowedDevicestableSeeder::class,
            EquipmentsTableSeeder::class,
            DevicesTableSeeder::class,
            StudentsTableSeeder::class,
            UsersTableSeeder::class,
            BooksBorrowedTableSeeder::class,
            BooksTableSeeder::class
    ]);

    }
}
