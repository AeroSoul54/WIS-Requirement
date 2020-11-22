<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksBorrowedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books_borrowed', function (Blueprint $table) {
            $table->id();
            $table->integer('book_id');
            $table->integer('student_id');
            $table->date('date_time_borrowed');
            $table->date('return_due_date');
            $table->date('date_returned');
            $table->decimal('Penalty_in_Peso', 8, 2);
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
        Schema::dropIfExists('books_borrowed');
    }
}
