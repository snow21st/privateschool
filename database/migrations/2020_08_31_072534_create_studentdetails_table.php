<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentdetails', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')
            ->references('id')
            ->on('students')
            ->onDelete('cascade');  

            $table->foreignId('class_id')
            ->references('id')
            ->on('classrooms')
            ->onDelete('cascade');  

            $table->foreignId('academic_id')
            ->references('id')
            ->on('academicyear')
            ->onDelete('cascade'); 

            $table->date('assign_date');
            $table->string('status'); 
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
        Schema::dropIfExists('studentdetails');
    }
}
