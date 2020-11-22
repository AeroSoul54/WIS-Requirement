<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesBorrowedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices_borrowed', function (Blueprint $table) {
            $table->id();
            $table->integer("device_id");
            $table->string('Title', 45);
            $table->string('Author', 45);
            $table->integer('student_id');
            $table->date('date_time_borrowed');
            $table->date('return_due_date');
            $table->date('date_returned');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devices_borrowed');
    }
}
