<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();  
            $table->foreignId('user_id')
            ->references('id')
            ->on('users')
<<<<<<< HEAD
            ->onDelete('cascade');   
               $table->foreignId('subject_id')
            ->references('id')
            ->on('subjects')
            ->onDelete('cascade');    
=======
            ->onDelete('cascade');

            $table->foreignId('subject_id')
            ->references('id')
            ->on('subjects')
            ->onDelete('cascade');  

>>>>>>> f39d7464eaef0d4142980d43dda25ac4f18c1af3
            $table->text('address');
            $table->string('phone');
            $table->string('gender');
            $table->string('nrc');
            $table->text('photo');
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
        Schema::dropIfExists('teachers');
    }
}
