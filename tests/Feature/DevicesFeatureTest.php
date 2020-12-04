<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DevicesFeatureTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function a_user_can_add_a_new_borrowed_devices()
    {

        $this->createUser();
        $user = factory(\App\User::class)->create();
        $this->loginUser($user);
        $this->createBorrowedDevices();
        $new_borrowed_device = factory(\App\borrowed_device::class)->make()->toArray(); // make an array

        $response = $this->post('/borrowed_devices', $new_borrowed_device);
        $response->assertRedirect('/borrowed_devices');
        $this->assertDatabaseHas('borrowed_devices', $new_borrowed_device);


    }
    // functions

    public function loginUser($user)
    {
        $this->actingAs($user);
    }


    public function createUser()
    {
        $users = [
            ['name' => 'John', 'email' => 'john@gmail.com', 'password' => '$2y$10$OQJcqjRpWB/2ZJkqJWt5FewPsmVd3QZnMOt8zN.OgD8mMYE6NB31S', 'facility' => 'Sports Center']
        ];

        DB::table('users')->insert($users);

    }

    public function createBorroweddevices()
    {
        $borrowed_devices = [
            ["devcie_id" => 1, "student_id" => 1, 'date_time_borrowed' => '2020-12-02 01:07:07', 'return_due_date' => '2020-12-4', 'date_returned' => '2020-12-3']

        ];

        DB::table('borrowed_devices')->insert($borrowed_devices);
    }
}


