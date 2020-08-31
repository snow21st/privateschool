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
            ->onDelete('cascade');

            $table->foreignId('subject_id')
            ->references('id')
            ->on('subjects')
            ->onDelete('cascade');  

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
