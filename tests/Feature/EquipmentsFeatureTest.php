<?php

namespace Tests\Feature;

use DB;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EquipmentsFeatureTest extends TestCase
{

    use RefreshDatabase;
    /** @test*/

    function a_user_can_see_all_of_the_borrowed_equipments()
    {

        $this->createUser();
        $user = factory(\App\User::class)->create();

        $this->loginUser($user);// login the user

        $this->createBorrowedEquipments();
        $borrowed_equipments = factory(\App\borrowed_equipment::class)->create();

        $response = $this->get('/equipments');
        $response->assertSee($borrowed_equipments->name);
    }


    /** @test*/
    function a_user_can_add_a_new_borrowed_equipment()
    {
        $this->createUser();
        $user = factory(\App\User::class)->create();
        $this->loginUser($user);
        $this->createBorrowedEquipments();
        $new_borrowed_equipment = factory(\App\borrowed_equipment::class)->make()->toArray(); // make an array

        $response = $this->post('/borrowed_equipments', $new_borrowed_equipment);
        $response->assertRedirect('/borrowed_equipments');
        $this->assertDatabaseHas('borrowed_equipments', $new_borrowed_equipment);
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

    public function createBorrowedEquipments()
    {
        $borrowed_equipments = [
            ["equipment_id" => 1, "student_id" => 1, 'number_of_item' => 14, 'rent_start_date' => '2020-11-1', 'rent_end_date' => '2020-11-2', 'facility' => 'Sports Center', 'facilitator' => 'John']

        ];

        DB::table('borrowed_equipments')->insert($borrowed_equipments);
    }
}
