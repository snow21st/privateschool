<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestpapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testpapers', function (Blueprint $table) {
            $table->id();
            $table->string('month');
            $table->string('mark');
            $table->text('remark');
            $table->foreignId('student_id')
            ->references('id')
            ->on('students')
            ->onDelete('cascade'); 

            $table->foreignId('teacher_id')
            ->references('id')
            ->on('teachers')
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
        Schema::dropIfExists('testpapers');
    }
}
