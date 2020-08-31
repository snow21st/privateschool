<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimetablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timetables', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('start_time');
            $table->string('end_time');
            
            $table->foreignId('class_id')
            ->references('id')
            ->on('classrooms')
            ->onDelete('cascade'); 

            $table->foreignId('teacher_id')
            ->references('id')
            ->on('teachers')
            ->onDelete('cascade'); 

            $table->foreignId('academic_id')
            ->references('id')
            ->on('academicyears')
            ->onDelete('cascade'); 


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
        Schema::dropIfExists('timetables');
    }
}
