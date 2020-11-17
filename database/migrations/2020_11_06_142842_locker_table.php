<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LockerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locker', function(Blueprint $table){
            $table->id();
            $table->string('building_name');
            $table->string('locker_floor')->unique();
            $table->string('rent_sdate')->unique();
            $table->string('rent_edate')->unique();
            $table->string('reservation_status')->unique();
            
            $table->timestamps()
        }
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
