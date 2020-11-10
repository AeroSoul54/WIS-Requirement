<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('name')->index();
            $table->string('amount');
            $table->string('rent_start_date');
            $table->string('rent_end_date');
            $table->string('facility');
            $table->string('facilitator');
            $table->string('student_id');
            $table->timestamp('college_department_id')->nullable();
        });
    }


    @return
    public function down()
    {
        Schema::dropIfExists('users');
    }
}